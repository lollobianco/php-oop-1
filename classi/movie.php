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

public function isHorror(){
   
   if($this -> genre == 'horror' || $this -> genre == 'HORROR'){
      return "il film: $this->title è horror";
   }  else {
         return "il film: $this->title non è horror";
      }  

}

}

$arrayFilm = [];



?>