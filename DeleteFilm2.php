<!doctype html>
<html>

<head>
    <title>delete Film formulier 2</title>
</head>
<body>
<h1>delete Film formulier 2</h1>

<?php

require "Films.php";
$FilmID = $_POST["FilmID"];
$Films1 = new films();
$Films1->searchFilm($FilmID);
$Films1->oplezen();
?>

<form action="DeleteFilm3.php" method="post">

    <input type="hidden" name="FilmID" value=" <?php echo $FilmID ?> ">

    <input type="hidden" 	name="verwijderBox" value="nee">
    <input type="checkbox" 	name="verwijderBox" value="ja">
    <label for="verwijderBox"> Verwijder deze Film.</label><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="index.php">Terug naar het hoofdmenu</a>
</body>
