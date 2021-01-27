<?php


class Article
{
    private $title;
    private $like;
    private $dislike;
    private $id;
    private $image;
    private $description;
    private $article_category;

    public function __construct($title,$image,$description, $id,$article_category,$like=0,$dislike=0)
    {
        $this->title = $title;
        $this->like = $like;
        $this->dislike = $dislike;
        $this->id = $id;
        $this->image = $image;
        $this->description = $description;
        $this->article_category = $article_category;
    }


    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getLike()
    {
        return $this->like;
    }

    public function setLike($like): void
    {
        $this->like = $like;
    }

    public function getDislike()
    {
        return $this->dislike;
    }

    public function setDislike($dislike): void
    {
        $this->dislike = $dislike;
    }

    public function getId() : int
    {
        return $this->id;
    }

    public function setId(int $id): void
    {
        $this->id = $id;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description): void
    {
        $this->description = $description;
    }



    public function getArticleCategory()
    {
        return $this->article_category;
    }

    public function setArticleCategory($article_category): void
    {
        $this->article_category = $article_category;
    }




}