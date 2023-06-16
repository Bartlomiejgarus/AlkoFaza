<?php

class Post {
    private $title;
    private $description;
    private $ingredients;
    private $howToDo;
    private $image;
    private $favorite;
    private $id;

    public function __construct($title, $description, $ingredients, $howToDo, $image, $favorite = 0, $id = null)
    {
        $this->title = $title;
        $this->description = $description;
        $this->ingredients = $ingredients;
        $this->howToDo = $howToDo;
        $this->image = $image;
        $this->favorite = $favorite;
        $this->id = $id;
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function setTitle($title)
    {
        $this->title = $title;
    }

    public function getDescription()
    {
        return $this->description;
    }

    public function setDescription($description)
    {
        $this->description = $description;
    }

    public function getIngredients()
    {
        return $this->ingredients;
    }

    public function setIngredients($ingredients)
    {
        $this->ingredients = $ingredients;
    }

    public function getHowToDo()
    {
        return $this->howToDo;
    }

    public function setHowToDo($howToDo)
    {
        $this->howToDo = $howToDo;
    }

    public function getImage()
    {
        return $this->image;
    }

    public function setImage($image)
    {
        $this->image = $image;
    }

    public function getFavorite()
    {
        return $this->favorite;
    }

    public function setFavorite($favorite)
    {
        $this->favorite = $favorite;
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;
    }
}