<?php
class Movie
{
public $title;
public int $year;
public $director;
public int $raiting;
public $genere;

function __construct($_title, $_year, $_director, $_raiting)
{
$this->title = $_title;
$this->year = $_year;
$this->director = $_director;
$this->raiting = $_raiting;
}

function getRaiting()
{

if (!isset($this->raiting)) {
return "Valutazione mancante";
}


return $this->raiting;
}
}