<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function addPost()
    {
        if ($this->isUserLoggedIn())
            $this->render('addPost');
    }

    public function editPost()
    {
        if ($this->isUserLoggedIn())
            $this->render('editPost');
    }

    public function showPost()
    {
        $this->render('showPost');
    }

    public function users()
    {
        $this->render('users');
    }

    public function register()
    {
        $this->render('register');
    }

    protected function isUserLoggedIn()
    {
        if (isset($_COOKIE['email']) && isset($_COOKIE['password'])) 
        {
            $email = $_COOKIE['email'];
            $password = $_COOKIE['password'];

            $userRepository = new UserRepository();
            $user = $userRepository->getUser($email);

            if (!password_verify($password, $user->getPassword())) {
                return $this->render('login', ['messages' => ['Wrong password!']]);
            }

            return true;
        }

        return $this->render('login', []);
    }
}