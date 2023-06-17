<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/Post.php';
require_once __DIR__.'/../repository/PostRepository.php';
require_once __DIR__.'/../repository/UserRepository.php';

class PostController extends AppController {

    const MAX_FILE_SIZE = 1024*1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    private $postRepository;

    public function __construct()
    {
        parent::__construct();
        $this->postRepository = new PostRepository();
    }

    public function posts()
    {
        $this->render('posts', ['posts' => $this->postRepository->getPosts()]);
    }

    public function showPost()
    {
        if (isset($_GET['id'])) {
            $postId = $_GET['id'];
        }else {
            $postId = 1;
        }

        $project = $this->postRepository->getPost($postId);
        $this->render('showPost', ['post' => $project]);
    }

    public function addNewPost()
    {   
        if ($this->isPost() && is_uploaded_file($_FILES['file']['tmp_name']) && $this->validate($_FILES['file'])) {
            move_uploaded_file(
                $_FILES['file']['tmp_name'], 
                dirname(__DIR__).self::UPLOAD_DIRECTORY.$_FILES['file']['name']
            );

            $post = new Post($_POST['title'], $_POST['description'], $_POST['ingredients'], $_POST['howToDo'], $_FILES['file']['name']);
            $this->postRepository->addPost($post);

            return $this->render('posts', [
                'posts' =>  $this->postRepository->getPosts(),
                'messages' => $this->message]);
        }
        return $this->render('add-post', ['messages' => $this->message]);
    }

    public function search()
    {
        $contentType = isset($_SERVER["CONTENT_TYPE"]) ? trim($_SERVER["CONTENT_TYPE"]) : '';

        if ($contentType === "application/json") {
            $content = trim(file_get_contents("php://input"));
            $decoded = json_decode($content, true);

            header('Content-type: application/json');
            http_response_code(200);

            echo json_encode($this->postRepository->getPostByTitle($decoded['search']));
        }
    }

    public function favorite(int $id) {
        $this->postRepository->favorite($id);
        http_response_code(200);
    }

    private function validate(array $file): bool
    {
        if ($file['size'] > self::MAX_FILE_SIZE) {
            $this->message[] = 'File is too large for destination file system.';
            return false;
        }

        if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
            $this->message[] = 'File type is not supported.';
            return false;
        }
        return true;
    }
}