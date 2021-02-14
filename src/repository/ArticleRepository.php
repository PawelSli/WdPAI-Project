<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Slide.php';
require_once __DIR__.'/../models/Article.php';

class ArticleRepository extends Repository
{


    public function getCategories(): array
    {
        $result = [];
        $stmt=$this->database->connect()->prepare('
            SELECT categories.name FROM public.categories;
        ');
        $stmt->execute();
        $categories = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($categories as $category){
            $result[]=$category['name'];
        }
        return $result;
    }

    public function getSlides(string $article_id): array
    {
        $result = [];
        $article_id =strtolower($article_id);
        $stmt = $this->database->connect()->prepare('
            SELECT slides.title,slides.image,slides.description,slides.article_id
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
                $slide['description'],
                $slide['article_id']
            );
        }
        return $result;
    }

    public function addSlide(Slide $slide): void
    {
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.slides(title, image, description, article_id)
            VALUES (?, ?, ?, ?)
        ');
        $stmt->execute([
            $slide->getTitle(),
            $slide->getImage(),
            $slide->getDesc(),
            $slide->getArticleId()
        ]);
    }

    public function getArticle(string $title): ?Article
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.articles WHERE title = :title
        ');
        $stmt->bindParam(':title', $title, PDO::PARAM_STR);
        $stmt->execute();

        $project = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($project == false) {
            return null;
        }

        return new Article(
            $project['title'],
            $project['image'],
            $project['description'],
            $project['id_assigned_by'],
            $project['article_category'],
            $project['like'],
            $project['dislike']
        );
    }

    public function addArticle(Article $article):void{
        $temp=[];
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO public.articles(title, created_at, id_assigned_by, image, description,article_category)
            VALUES (?, ?, ?, ?, ?, ?)
        ');
        $assignedById = 1;

        $stmt->execute([
            $article->getTitle(),
            $date->format('Y-m-d'),
            $assignedById,
            $article->getImage(),
            $article->getDescription(),
            $article->getArticleCategory()
        ]);
    }
}