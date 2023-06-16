<!doctype html>
<html>

<head>
    <title>update Film formulier 3</title>
</head>
<body>
<h1>update Film formulier 3</h1>

<?php
require "films.php";

// gegevens uit de array in variabelen stoppen
$FilmID = $_POST["FilmID"];
$FilmNaam=$_POST["FilmNaam"];
$FilmBeschrijving=$_POST["FilmBeschrijving"];
$FilmRating=$_POST["FilmRating"];
$FilmBanner=$_POST["FilmBanner"];

// maken object ---------------------------------------------------
$Film1 = new films ($FilmID, $FilmNaam, $FilmBeschrijving, $FilmRating, $FilmBanner);
$Film1->updateFilm($FilmID);
echo "Dit zijn de gewijzigde gegevens: <br/>";
echo $FilmID."<br/>";
$Film1->oplezen();

?>
<a href="artikelen.html">Terug naar het hoofdmenu</a>
</body>
</html>
