<?php

class Movie
{
  // Proprietà della classe per memorizzare informazioni sul film
  public $title;
  public $genre;
  public $releaseYear;

  // Costruttore della classe per inizializzare le proprietà del film
  public function __construct($title, $genre, $releaseYear)
  {
    $this->title = $title;
    $this->genre = $genre;
    $this->releaseYear = $releaseYear;
  }

  // Metodo per visualizzare le informazioni del film
  public function displayMovieInfo()
  {
    echo "Title: " . $this->title . "<br>";
    echo "Genre: " . $this->genre . "<br>";
    echo "Release Year: " . $this->releaseYear . "<br>";
    echo "<br>";
  }
}

// Creazione di due istanze della classe Movie con dati diversi
$movie1 = new Movie("Titanic", "Drama", 1997);
$movie2 = new Movie("Inception", "Thriller", 2010);

// Visualizzazione delle informazioni del primo film
echo "<h2>Movie 1:</h2>";
$movie1->displayMovieInfo();

// Visualizzazione delle informazioni del secondo film
echo "<h2>Movie 2:</h2>";
$movie2->displayMovieInfo();
