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
require_once "./models/Movie.php";
$type = ['fanasy', 'horror', 'crime'];

$film1 = new Movie('il sigonore degli anelli', 2002, 'Peter Jackson', 10, 'fantasy');
$film1->genere = $type[1];
$film2 = new Movie('Star Wars', 1977, 'George Lucas', 10, 'fantasy');
$film2->genere = $type[2];
var_dump($film1, $film2);
?>