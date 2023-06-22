<!doctype html>
<html lang="nl">
<head>
    <title>Overzicht van je account</title>
</head>
<body>
<h1>Overzicht van je account</h1>
<p>Dit zijn alle gegevens van je account.</p>
<?php
require "aanmelden.php";            // nodig om object te maken
$Aanmeld1 = new films();
$Aanmeld1->readAanmelden();
$Aanmeld1->oplezen();
?>
<a href="Homepage.html"><br/>Terug naar het hoofdmenu</a>
</body>
</html>