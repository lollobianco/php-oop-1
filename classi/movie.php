<?php 

class Movie{
   public $title;
   public $genre;
   public $year;

   function __construct($title, $genre, $year){
      $this -> title = $title;
      $this -> genre = $genre;
      $this -> year = $year; 
   }
}

?>