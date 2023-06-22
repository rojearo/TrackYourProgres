<!doctype html>
<html>

<head>
    <title>delete Aanmelden formulier 3</title>
</head>
<body>
<h1>delete Aanmelden formulier 3</h1>

<?php
require "aanmelden.php";

$AanmeldId = $_POST["FilmID"];
$verwijderen = $_POST["verwijderBox"];

if ($verwijderen=="ja")
{
    echo "Je account is verwijderd <br/>";
    $student1 =  new aanmelden();
    $student1->deleteAanmelden($AanmeldId);
}
else
{
    echo "Je account is niet verwijderd <br/>";
}
?>
<a href="../TrackYourProgress/index.php">Terug naar het hoofdmenu</a>
</body>
</html>
