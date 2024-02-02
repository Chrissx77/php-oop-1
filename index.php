<?php

class Genere{
    public $genere;

    public function __construct($genere)
    {
        $this->genere = $genere;
    }

}

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
}


$film1 = new Movie('ForzaCatania', '21046', 'simpaticone', 'alessio rugi', 'sergio buzi', [new Genere('thriller'), new Genere('Horror')]);

$film2 = new Movie('ForzaCatania', '21046', 'simpaticone', 'alessio rugi', 'sergio buzi', [new Genere('thriller'), new Genere('Horror')]);

var_dump($film1);
echo '<br>';
var_dump($film1 -> get_title());
echo '<br>';
echo '<br>';
var_dump($film2);
echo '<br>';
var_dump($film2 -> get_title());
echo '<br>';
echo '<br>';
var_dump($film2);
echo '<br>';
$film2 -> set_title('Forza Juventus');
var_dump($film2 -> get_title());








