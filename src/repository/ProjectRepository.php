<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Project.php';
require_once __DIR__.'/../models/Slide.php';
require_once __DIR__.'/../models/Article.php';

class ProjectRepository extends Repository
{
    public function getAllArticles():array
    {
        $result = [];
        $stmt=$this->database->connect()->prepare('
            SELECT * FROM public.articles
        ');
        $stmt->execute();
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($articles as $article) {
            $result[] = new Article(
                $article['title'],
                $article['image'],
                $article['description'],
                $article['id_assigned_by'],
                $article['article_category'],
                $article['like'],
                $article['dislike']
            );
        }
        return $result;
    }

    public function getArticlesForCategory(string $article_id): array
    {
        $result = [];
        $article_id =strtolower($article_id);
        $stmt = $this->database->connect()->prepare('
           SELECT articles.title, articles.image,articles.description,articles.id_assigned_by,
           articles.like,articles.dislike
            from articles inner join categories on articles.article_category = categories.id
            WHERE lower(public.categories.name) = :article_id
        ');
        $stmt->bindParam(':article_id', $article_id, PDO::PARAM_STR);
        $stmt->execute();
        $articles = $stmt->fetchAll(PDO::FETCH_ASSOC);
        foreach ($articles as $article) {
            $result[] = new Article(
                $article['title'],
                $article['image'],
                $article['description'],
                $article['id_assigned_by'],
                $article['article_category'],
                $article['like'],
                $article['dislike']
            );
        }
        return $result;
    }

    public function getProject(int $id): ?Project
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.projects WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $project = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($project == false) {
            return null;
        }

        return new Project(
            $project['title'],
            $project['description'],
            $project['image']
        );
    }

    public function addProject(Project $project): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO projects (title, description, image, created_at, id_assigned)
            VALUES (?, ?, ?, ?, ?)
        ');

        //TODO you should get this value from logged user session
        $assignedById = 1;

        $stmt->execute([
            $project->getTitle(),
            $project->getDescription(),
            $project->getImage(),
            $date->format('Y-m-d'),
            $assignedById
        ]);
    }

    public function getProjects(): array
    {
        $result = [];

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.projects;
        ');
        $stmt->execute();
        $projects = $stmt->fetchAll(PDO::FETCH_ASSOC);

        foreach ($projects as $project) {
            $result[] = new Project(
                $project['title'],
                $project['description'],
                $project['image'],
                $project['like'],
                $project['dislike'],
                $project['id']
            );
        }

        return $result;
    }

    public function getProjectByTitle(string $searchString)
    {
        $searchString = '%' . strtolower($searchString) . '%';

        $stmt = $this->database->connect()->prepare('
            SELECT * FROM projects WHERE LOWER(title) LIKE :search OR LOWER(description) LIKE :search
        ');
        $stmt->bindParam(':search', $searchString, PDO::PARAM_STR);
        $stmt->execute();

        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function like(int $id) {
        $stmt = $this->database->connect()->prepare('
            UPDATE projects SET "like" = "like" + 1 WHERE id = :id
         ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

    public function dislike(int $id) {
        $stmt = $this->database->connect()->prepare('
            UPDATE projects SET dislike = dislike + 1 WHERE id = :id
         ');

        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();
    }

}