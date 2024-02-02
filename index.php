<?php

class Movie{
    public $title;
    public $genres = [];
    public $releaseYear;

    public function __construct($title, $genres, $releaseYear) {
        $this->title = $title;
        $this->genres = $genres;
        $this->releaseYear = $releaseYear;
    }

    public function displayMovieInfo() {
        $genreList = implode(', ', $this->genres);
        echo "Title: {$this->title}, Genre: {$genreList}, Release Year: {$this->releaseYear}";
    }
}

$movie1 = new Movie("UP", ["Cartoon"], 2009);
$movie2 = new Movie("Inception", ["Sci-Fi","Action"], 2010);

echo "Movie 1:";
$movie1->displayMovieInfo();

echo '<br>';

echo "Movie 2:";
$movie2->displayMovieInfo();