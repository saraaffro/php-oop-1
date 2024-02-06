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
        return "Title: {$this->title}, Genre: {$genreList}, Release Year: {$this->releaseYear}";
    }
}
