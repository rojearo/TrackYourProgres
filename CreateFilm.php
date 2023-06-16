<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>CreateFilm</title>
</head>
<body>

<div class="form">
    <h1>Create Artikel formulier</h1>
    <form action="CreateFilm2.php" method="post">

        <label for="FilmNaam">FilmNaam:</label><br>
        <input type="text" name="FilmNaam"><br>

        <label for="FilmBeschrijving">FilmBeschrijving:</label><br>
        <input type="text" name="FilmBeschrijving"><br>

        <label for="FilmRating">FilmRating:</label><br>
        <input type="text" name="FilmRating"><br>

        <label for="FilmBanner">FilmBanner:</label><br>
        <input type="file" name="FilmBanner"><br>

        <input class="submit" type="submit">
    </form>

    <a href="artikelen.html">Terug</a>
</div>

</body>
</html>