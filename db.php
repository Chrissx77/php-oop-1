
<?php

include("./models/genere.php");
include("./models/movie.php");


$array_movie = [
    $film1 = new Movie('ForzaCatania', '21046', 'simpaticone', 'alessio rugi', 'sergio buzi', [new Genere('thriller'), new Genere('Horror')]),
    $film2 = new Movie('ForzaCatania', '21046', 'simpaticone', 'alessio rugi', 'sergio buzi', [new Genere('thriller'), new Genere('Horror')])
];