<!doctype html>
<html>

<head>
    <title>delete Film formulier 3</title>
</head>
<body>
<h1>delete Film formulier 3</h1>

<?php
require "films.php";

$FilmID = $_POST["FilmID"];
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen=="ja")
{
    echo "De Film is verwijderd <br/>";
    $student1 =  new films();
    $student1->deleteFilm($FilmID);
}
else
{
    echo "De Film is niet verwijderd <br/>";
}
?>
<a href="index.php">Terug naar het hoofdmenu</a>
</body>
</html>
