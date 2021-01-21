<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Slide.php';
require_once __DIR__ . '/../repository/ArticleRepository.php';


class SlideshowController extends AppController
{

    const MAX_FILE_SIZE = 1024 * 1024;
    const SUPPORTED_TYPES = ['image/png', 'image/jpeg'];
    const UPLOAD_DIRECTORY = '/../public/uploads/';

    private $message = [];
    private $articleRepository;

    public function __construct()
    {
        parent::__construct();
        $this->articleRepository = new ArticleRepository();
    }

    public function slideshow($id)
    {
        $slides=$this->articleRepository->getSlides($id);
        $this->render('slideshow',['slides' => $slides]);
    }

    public function add_article()
    {
        $this->render('add-article');
    }

}