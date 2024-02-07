<?php


class Author
{
    public string $name;
    public $books = [];

    // TODO Generate getters and setters of properties
    // TODO Generate constructor for all attributes. $books argument of the constructor can be optional

    /**
     * @param string $title
     * @param float  $price
     * @return \Book
     */

     public function __construct($name, $books)
     {
         $this->name = $name;
         $this->books = $books;
     }

     public function getName(){
        return $this->name;
     }

     public function setName(){
        $this->name = $name;
     }

     public function getBooks(){
        return $this->$books;
     }

     public function setBooks($books){
        $this->books = $books;
     }

    public function addBook(string $title, float $price): Book
    {
        // TODO Create instance of the book. Add into $books array and return it
    }
}