<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css">
    <title>Document</title>
</head>

<body>
    <h1>Film</h1>
</body>

</html>

<?php
class Movie
{
    public $title;
    public $year;
    public $director;
    public $raiting;

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

$film1 = new Movie('il sigonore degli anelli', 2002, 'Peter Jackson', 10);
$film2 = new Movie('Star Wars', 1977, 'George Lucas', 10);
var_dump($film1, $film2);
?>