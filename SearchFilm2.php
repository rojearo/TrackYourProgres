<!doctype html>
<html>

<head>
    <title>search Film formulier 2</title>
</head>
<body>
<h1>search Film formulier 2</h1>

<?php

require "films.php";
require "connect.php";


$FilmID = $_POST["FilmID"];
$Film1 = new films();
$Film1->searchFilm($FilmID);
$Film1->oplezen();
?>

<a href="index.php">Terug naar het hoofdmenu</a>
</body>
</html>