<?php

require_once 'AppController.php';
require_once __DIR__ .'/../models/User.php';
require_once __DIR__.'/../repository/UserRepository.php';

class UserController extends AppController
{
    private $userRepository;

    public function __construct()
    {
        parent::__construct();
        $this->userRepository = new UserRepository();
    }

    public function showProfile()
    {
        $profile=$this->userRepository->getUser($_COOKIE['anon']);
        $this->render('profile', ['profile' => $profile]);
    }

}