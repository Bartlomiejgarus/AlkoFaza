<?php

class Post {
    private $title;
    private $description;
    private $ingredients;
    private $howToDo;
    private $image;

    public function __construct($title, $description, $ingredients, $howToDo, $image)
    {
        $this->title = $title;
        $this->description = $description;
        $this->ingredients = $ingredients;
        $this->howToDo = $howToDo;
        $this->image = $image;
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
}