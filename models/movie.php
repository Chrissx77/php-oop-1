<?php

include("./genere.php");


class Movie
{

    public $title;
    public $year;
    public $description;
    public $director;
    public $writer;
    public $genre = [];

    public function __construct($title, $year, $description, $director, $writer, $genre)
    {
        $this->title = $title;
        $this->year = $year;
        $this->description = $description;
        $this->director = $director;
        $this->writer = $writer;
        $this->genre = $genre;
    }

    public function get_title()
    {
        return $this->title;
    }

    public function set_title($title)
    {
        $this->title = $title;
    }

    public function printMovie()
    {
        echo $this->title;
        echo $this->year;
        echo $this->description;
        echo $this->director;
        echo $this->writer;

        foreach ($this->genre as $genre) {
            echo $genre->genres;
        }
    }
}
