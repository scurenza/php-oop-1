<?php
require_once __DIR__ . "/Models/movie.php";
require_once __DIR__ . "/Models/genres.php";
require_once __DIR__ . "/Models/cast.php";


$cast_film = [
    new Cast("Keanu", "Reeves", 58),
    new Cast("Carrie-Anne", "Moss", 55),
    new Cast("Laurence", "Fishburne", 61)
];

$genres_film = [
    new Genre("Science Fiction"),
    new Genre("Thriller"),
    new Genre("Fantasy")
];

$movie = new Movie("The Matrix", $cast_film, $genres_film);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Film DB</title>
</head>

<body>
    <section>
        <h2>Dati Film</h2>
    </section>
</body>

</html>