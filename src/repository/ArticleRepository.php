<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Slide.php';

class ArticleRepository extends Repository
{

    public function getSlides(string $article_id): array
    {
        $result = [];
        $article_id =strtolower($article_id);
        $stmt = $this->database->connect()->prepare('
            SELECT slides.title,slides.image,slides.desc,slides.article_id
            FROM public.slides INNER JOIN public.articles ON slides.article_id=articles.id 
            WHERE lower(public.articles.title)=:article_id
        ');
        $stmt->bindParam(':article_id', $article_id, PDO::PARAM_STR);
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