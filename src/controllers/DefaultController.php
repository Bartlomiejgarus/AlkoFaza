<?php

require_once 'AppController.php';

class DefaultController extends AppController {

    public function index()
    {
        $this->render('login');
    }

    public function addPost()
    {
        $this->render('addPost');
    }

    public function editPost()
    {
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
}