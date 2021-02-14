<?php

require_once 'AppController.php';
require_once __DIR__ . '/../models/Slide.php';
require_once __DIR__ . '/../models/Article.php';
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
        $this->come();
        $slides=$this->articleRepository->getSlides($id);
        $this->render('slideshow',['slides' => $slides]);
    }



    public function addArticle()
    {
        $this->come();
        $check=true;
        if($this->isPost() && is_uploaded_file($_FILES['main_file']['tmp_name']) && $this->validate($_FILES['main_file']))
        {
            foreach ($_FILES["file"]["tmp_name"] as $key => $tmp_name){
                if(!(is_uploaded_file($_FILES['file']['tmp_name'][$key])&&$this->validate($_FILES['file'],$key)))
                {
                    $check=false;
                }
            }
            if($check){
                $tempId=1;
                $article=new Article($_POST['main_title'],$_FILES['main_file']['name'],$_POST['main_description'],$tempId,$_POST['category']);
                move_uploaded_file(
                    $_FILES['main_file']['tmp_name'],
                    dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['main_file']['name']
                );

                $this->articleRepository->addArticle($article);
                foreach ($_FILES["file"]["tmp_name"] as $key => $tmp_name){
                    move_uploaded_file(
                        $_FILES['file']['tmp_name'][$key],
                        dirname(__DIR__) . self::UPLOAD_DIRECTORY . $_FILES['file']['name'][$key]
                    );
                    $tempId = $this->articleRepository->getArticle($_POST['main_title'])->getId();

                    $slide=new Slide($_POST['title'][$key], $_FILES['file']['name'][$key],$_POST['description'][$key],$tempId);
                    $this->articleRepository->addSlide($slide);


                }
                return $this->render('login');
            }

        }
        $categories=$this->articleRepository->getCategories();
        $this->render('add-article',['categories' => $categories]);
    }


    private function validate(array $file, int $index=-1): bool
    {
        if($index == -1 ){
            if ($file['size'] > self::MAX_FILE_SIZE) {
                $this->message[] = 'File is too large for destination file system.';
                return false;
            }

            if (!isset($file['type']) || !in_array($file['type'], self::SUPPORTED_TYPES)) {
                $this->message[] = 'File type is not supported.';
                return false;
            }
        }
        else
            {
                if($file['size'][$index]> self::MAX_FILE_SIZE)
                {
                    $this->message[] = 'File is too large for destination file system.';
                    return false;
                }

                if (!isset($file['type'][$index]) || !in_array($file['type'][$index], self::SUPPORTED_TYPES)) {
                    $this->message[] = 'File type is not supported.';
                    return false;
                }
            }

        return true;
    }

}