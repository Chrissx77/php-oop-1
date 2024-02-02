<?php

class Movie{

    public $title;
    public $year;
    public $description;
    public $director;
    public $writer;
    public $genere = [];

    public function __construct($title, $year, $description, $director, $writer,$genere )
    {
        $this -> title = $title;
        $this -> year = $year;
        $this -> description = $description;
        $this -> director = $director;
        $this -> writer = $writer;
        $this -> genere = $genere;
    }

    public function get_title(){
        return $this -> title;
    }

    public function set_title($title){
        $this->title = $title;
    }

    public function printMovie(){
        echo $this-> title;
        echo $this-> year;
        echo $this-> description;
        echo $this-> director;
        echo $this-> writer;
        echo $this-> genere;
    }
}