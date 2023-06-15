<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

//Forms
Router::get('', 'DefaultController');
Router::get('index', 'DefaultController');
Router::get('posts', 'PostController');
Router::get('users', 'DefaultController');
Router::get('addPost', 'DefaultController');
Router::get('editPost', 'DefaultController');
Router::get('showPost', 'DefaultController');
Router::get('register', 'DefaultController');

Router::post('register', 'SecurityController');
Router::post('login', 'SecurityController');
Router::post('addNewPost', 'PostController');

Router::run($path);