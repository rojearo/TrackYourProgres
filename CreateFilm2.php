<!doctype html>
<html>
<head>
    <title>CreateFilm 2</title>
</head>
<body>
<h1>CreateFilm 2</h1>

<div class="container">
    <?php

    require "films.php";
    require "connect.php";

    $FilmId = NULL;

    $FilmNaam = $_POST["FilmNaam"];

    $FilmBeschrijving = $_POST["FilmBeschrijving"];

    $FilmRating = $_POST["FilmRating"];

    $FilmBanner = $_POST["FilmBanner"];

    $Film1 = new films($FilmNaam, $FilmBeschrijving, $FilmRating, $FilmBanner);
    $Film1->createFilm();
    ?>
</div>
<a href="Homepage.html">Terug</a>
</body>
</html>