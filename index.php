<?php

include __DIR__ . "/models/Movie.php";

$movies = [
    new Movie("La città incantata", "2015", "10"),
    new Movie("Il castello errante di Howl", "2017", "9"),
    new Movie("Si alza il vento", "2011", "8")
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Movies</h1>
    <ul>
        <?php foreach ($movies as $film) { ?>
        <li><?= $film->description() ?></li>
       <?php } ?>
    </ul>
</body>

</html>