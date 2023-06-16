<!doctype html>
<html lang="nl">
<head>
    <title>afdrukken Film</title>
</head>
<body>
<h1>afdrukken Film</h1>
<p>Dit zijn alle gegevens uit de FilmTabel.</p>
<?php
require "films.php";            // nodig om object te maken
$Film1 = new films();
$Film1->readFilm();
$Film1->oplezen();
?>
<a href="Homepage.html"><br/>Terug naar het hoofdmenu</a>
</body>
</html>