<?php

require_once 'Repository.php';
require_once __DIR__.'/../models/Post.php';

class PostRepository extends Repository
{
    public function getPost(int $id): ?Post
    {
        $stmt = $this->database->connect()->prepare('
            SELECT * FROM public.Posts WHERE id = :id
        ');
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $Post = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($Post == false) {
            return null;
        }

        return new Post(
            $Post['title'],
            $Post['description'],
            $Post['ingredients'],
            $Post['how_to_do'],
            $Post['image']
        );
    }

    public function addPost(Post $Post): void
    {
        $date = new DateTime();
        $stmt = $this->database->connect()->prepare('
            INSERT INTO posts (title, description, ingredients, how_to_do, image, created_at, id_assigned_by)
            VALUES (?, ?, ?, ?, ?, ?, ?)
        ');

        //TODO you should get this value from logged user session
        $assignedById = 1;

        $stmt->execute([
            $Post->getTitle(),
            $Post->getDescription(),
            $Post->getIngredients(),
            $Post->getHowToDo(),
            $Post->getImage(),
            $date->format('Y-m-d'),
            $assignedById
        ]);
    }
}