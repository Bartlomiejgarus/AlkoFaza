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
Router::get('showPost', 'PostController');
Router::get('register', 'DefaultController');
Router::get('favorite', 'PostController');

Router::post('register', 'SecurityController');
Router::post('login', 'SecurityController');
Router::post('addNewPost', 'PostController');
Router::post('search', 'PostController');

Router::run($path);