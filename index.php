<?php

// Importo le classi
require_once 'Classes/movie.php';
require_once 'Classes/genre.php';


$genre1 = new Genre("");
$genre1->setGenre("Comedy");

$genre2 = new Genre("");
$genre2->setGenre("Horror");

$movie1 = new Movie ('Angry Birds', 'Pippo', 2010, 'ITA', 120, $genre1);
// $movie1->setName("Terminator");

$movie2 = new Movie ('Forrest Gump', 'Pluto', 1990, 'ITA', 160, $genre2);
// $movie2->setName("Terminator");

var_dump($movie1);
var_dump($movie1->getName());
var_dump($movie2);
var_dump($movie2->getName());


