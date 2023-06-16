<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Post.php';

class PostRepository extends Repository
{
    public function getPost(int $id): ?Post
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.Posts WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $Post = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($Post == false) {
            return null;
        }

        return new Post(
            $Post['title'],
            $Post['description'],
            $Post['ingredients'],
            $Post['how_to_do'],
            $Post['image']
        );
    }

    public function addPost(Post $Post): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO posts (title, description, ingredients, how_to_do, image, created_at, id_assigned_by)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ');

        //TODO you should get this value from logged user session

        $userRepository = new UserRepository();
        if (isset($_COOKIE['email']))
            $assignedById = $userRepository->getUserId($_COOKIE['email']);
        else
            return;

        $stmt->execute([
            $Post->getTitle(),
            $Post->getDescription(),
            $Post->getIngredients(),
            $Post->getHowToDo(),
            $Post->getImage(),
            $date->format('Y-m-d'),
            $assignedById
        ]);
    }

    public function getPosts(): array
    {
        $result = [];
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM posts
        ');

        $stmt->execute();
        $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($posts as $post)
        {
            $result[] = new Post(
                $post['title'],
                $post['description'],
                $post['ingredients'],
                $post['how_to_do'],
                $post['image']
            );
        }

        return $result;
    }

    public function getPostByTitle(string $searchString)
    {
        $searchString = '%' . strtoupper($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM posts WHERE UPPER(title) LIKE :search OR UPPER(description) LIKE :search
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }
}