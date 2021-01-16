<?php


class Slide
{
    private $title;
    private $image;
    private $desc;
    private $article_id;

    public function __construct($title, $image, $desc, $article_id=null)
    {
        $this->title = $title;
        $this->image = $image;
        $this->desc = $desc;
        $this->article_id = $article_id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title): void
    {
        $this->title = $title;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image): void
    {
        $this->image = $image;
    }

    public function getDesc()
    {
        return $this->desc;
    }

    public function setDesc($desc): void
    {
        $this->desc = $desc;
    }

    public function getArticleId()
    {
        return $this->article_id;
    }

    public function setArticleId($article_id): void
    {
        $this->article_id = $article_id;
    }

}