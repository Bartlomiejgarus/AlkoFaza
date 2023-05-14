<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url( $path, PHP_URL_PATH);

//Forms
Router::get('index', 'DefaultController');
Router::get('posts', 'DefaultController');
Router::get('addPost', 'DefaultController');

Router::post('login', 'SecurityController');
Router::post('addNewPost', 'PostController');

Router::run($path);