<!doctype html>
<html>

<head>
    <title>delete Aanmelden formulier 2</title>
</head>
<body>
<h1>delete Aanmelden formulier 2</h1>

<?php

require "aanmelden.php";
$AanmeldId = $_POST["FilmID"];
$Aanmelden1 = new aanmelden();
$Aanmelden1->searchAanmelden($AanmeldId);
$Aanmelden1->oplezen();
?>

<form action="DeleteAanmelden3.php" method="post">

    <input type="hidden" name="AanmeldId" value=" <?php echo $AanmeldId ?> ">

    <input type="hidden" 	name="verwijderBox" value="nee">
    <input type="checkbox" 	name="verwijderBox" value="ja">
    <label for="verwijderBox"> Verwijder deze Film.</label><br/><br/>
    <input type="submit"><br/><br/>
</form>

<a href="../TrackYourProgress/index.php">Terug naar het hoofdmenu</a>
</body>
