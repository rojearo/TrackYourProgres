<html>

<head>
    <title>update Film formulier 2</title>
</head>
<body>
<h1>update Film formulier 2</h1>

<?php

require "films.php";
$FilmID = $_POST["FilmID"];
$Film1 = new Films();
$Film1->searchFilm($FilmID);

$FilmNaam = $Film1->getFilmNaam();
$FilmBeschrijving = $Film1->getFilmBeschrijving();
$FilmRating = $Film1->getFilmRating();
$FilmBanner = $Film1->getFilmBanner();
?>

<form action="UpdateFilm3.php" method="post">

    <?php echo $FilmID ?>

    <input type="hidden" name="FilmID" value="<?php echo $FilmID; ?> "><br/>

    <label for="FilmBeschrijving">FilmBeschrijving:</label><br>
    <input type="text" name="Filmbeschrijving" value="<?php echo $FilmBeschrijving; ?> "><br/>

    <label for="FilmRating">FilmRating:</label><br>
    <input type="text" name="FilmRating" value="<?php echo $FilmRating; ?> "><br/>

    <label for="FilmBanner">FilmBanner:</label><br>
    <input type="text" name="FilmBanner" value="<?php echo $filmBanner; ?> "><br/><br/>

    <input type="submit"><br/><br/>
</form>

<a href="index.php">Terug naar het hoofdmenu</a>
</body>