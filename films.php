<?php

class films
{
    protected $filmNaam;
    protected $filmBeschrijving;
    protected $filmRating;

    public function __construct($filmNaam = NULL, $filmBeschrijving = NULL, $filmRating = NULL)
    {
        $this->filmNaam = $filmNaam;
        $this->filmBeschrijving = $filmBeschrijving;
        $this->filmRating = $filmRating;
    }

    /**
     * @return mixed|null
     */
    public function getFilmNaam()
    {
        return $this->filmNaam;
    }

    /**
     * @param mixed|null $filmNaam
     */
    public function setFilmNaam($filmNaam)
    {
        $this->filmNaam = $filmNaam;
    }

    /**
     * @return mixed|null
     */
    public function getFilmBeschrijving()
    {
        return $this->filmBeschrijving;
    }

    /**
     * @param mixed|null $filmBeschrijving
     */
    public function setFilmBeschrijving($filmBeschrijving)
    {
        $this->filmBeschrijving = $filmBeschrijving;
    }

    /**
     * @return mixed|null
     */
    public function getFilmRating()
    {
        return $this->filmRating;
    }

    /**
     * @param mixed|null $filmRating
     */
    public function setFilmRating($filmRating)
    {
        $this->filmRating = $filmRating;
    }

    public function createFilm()
    {
        echo "dit is een createFilm()<br/>";
        require "Connect.php";

        $FilmId = NULL;
        $FilmNaam = $this->getFilmNaam();
        $FilmBeschrijving = $this->getFilmBeschrijving();
        $FilmRating = $this->getFilmRating();

        $sql = $conn->Prepare
        ("
                    insert into film values
                    (:FilmID, :FilmNaam, :FilmBeschrijving, :FilmRating)
        ");

        $sql->bindParam("FilmID", $FilmId);
        $sql->bindParam("FilmNaam", $FilmNaam);
        $sql->bindParam("FilmBeschrijving", $FilmBeschrijving);
        $sql->bindParam("FilmRating", $FilmRating);
        $sql->execute();

        echo "de film is toegevoegd <br/>";
    }

    public function readFilm()
    {
        require "connect.php";
        $sql = $conn->prepare("
                                select FilmId, FilmNaam, FilmBeschrijving, FilmRating
                                from film
                                ");
        $sql->execute();
        foreach($sql as $Film){

            echo $Film["FilmId"] . "<br>";
            $this->FilmNaam=$Film["FilmNaam"]. "  ";
            $this->FilmBeschrijving=$Film["FilmBeschrijving"]. "  ";
            $this->FilmRating=$Film["FilmRating"]. "  ";
        }
    }

}