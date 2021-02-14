<?php

require 'Routing.php';

$path = trim($_SERVER['REQUEST_URI'], '/');
$path = parse_url($path, PHP_URL_PATH);

Router::get('', 'DefaultController');
Router::get('projects', 'ProjectController');
Router::post('login', 'SecurityController');
Router::post('addProject', 'ProjectController');
Router::post('register', 'SecurityController');
Router::post('search', 'ProjectController');
Router::get('like', 'ProjectController');
Router::get('dislike', 'ProjectController');
Router::get('slideshow', 'SlideshowController');
Router::get('addArticle', 'SlideshowController');
Router::get('category', 'ProjectController');
Router::get('main', 'ProjectController');
Router::get('logout', 'AppController');
Router::post('showProfile','UserController');



Router::run($path);