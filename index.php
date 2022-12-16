<?php

include_once __DIR__ . '/classi/movie.php';

?>

<h1>ADD FILM TO DATABASE</h1>

<form method="GET" return='false'>
  <input type="text" placeholder="Title" name="title">
  <input type="text" placeholder="Genre" name="genre">
  <input type="number" placeholder="Year" name="year">
  <button type="submit">Send Data</button>
</form>

<?php

if( !empty($_GET) && !empty( $_GET['title'] ) && !empty( $_GET['genre'] ) && !empty( $_GET['year'] ) ){

   $title = $_GET['title'];
   $genre = $_GET['genre'];
   $year = $_GET['year'];

   $film = new Movie( $title, $genre, $year );

   if(!in_array($film, $arrayFilm)){
      $arrayFilm[] = $film;
   }else{
      echo 'film già inserito';
   }

}

var_dump($arrayFilm);
echo $film->isHorror();

?>