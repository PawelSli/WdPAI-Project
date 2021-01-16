<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Slide.php';

class ArticleRepository extends Repository
{

    public function getSlides(int $article_id): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.slides WHERE article_id = :article_id ;
        ');
        $stmt->bindParam(':article_id', $article_id, PDO::PARAM_INT);
        $stmt->execute();
        $slides = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($slides as $slide) {
            $result[] = new Slide(
                $slide['title'],
                $slide['image'],
                $slide['desc'],
                $slide['article_id']
            );
        }
        return $result;
    }
}