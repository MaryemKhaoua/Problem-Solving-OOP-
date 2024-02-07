<?php


class Book
{
    public string $title;
    public float $price;
    public Author $author;

    // TODO Generate getters and setters of properties
    // TODO Generate constructor for all attributes. $author argument of the constructor can be optional
    public function __construct($title, $price, $author){
        $this->title = $title;
        $this->price = $price;
        $this->author = $author;
    }

    public function getTitle(){
        return $this->title;
    }

    public function setTitle($title){
        $this->title = $title;
    }

    public function getPrice(){
        return $this->price;
    }

    public function setPrice($price){
        $this->price = $price;
    }

    public function getAuthor()
    {
        return $this->author;
    }

    public function setAuthor($author){
        $this->author = $author;
    }

}