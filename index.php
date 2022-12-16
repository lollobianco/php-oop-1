<?php

include_once __DIR__ . '/classi/movie.php';

?>

<h1>ADD FILM TO DATABASE</h1>

<form method="GET">
  <input type="text" placeholder="title" name="title">
  <input type="text" placeholder="genre" name="genre">
  <input type="number" name="year">
  <button type="submit">Send</button>
</form>

<?php

$arrayFilm = [];

if( !empty($_GET) && !empty( $_GET['title'] ) && !empty( $_GET['genre'] ) && !empty( $_GET['year'] ) ){
  $title = $_GET['title'];
  $genre = $_GET['genre'];
  $year = $_GET['year'];

  $film = new Movie( $title, $genre, $year );
  var_dump( $film );

   if(!in_array($film, $arrayFilm)){
      $arrayFilm[] = $film;
   }

}

var_dump($arrayFilm);

?>