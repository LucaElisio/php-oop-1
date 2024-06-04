
<?php

require_once 'Classes/genre.php';

class Movie {

    private string $name;
    public string $director;
    public int $release_year;
    public string $language;
    public int $duration_min;
    private Genre $genre;

    public function __construct(string $name, string $director, int $release_year, string $language, int $duration_min, Genre $genre) {

        $this->name = $name;
        $this->director = $director;
        $this->release_year = $release_year;
        $this->language = $language;
        $this->duration_min = $duration_min;
        $this->genre = $genre;

    }


    public function setName(string $_name) {
        if (strlen($_name) > 50){
            throw new Exception("Lunghezza del nome troppo lunga"); 
        }
        $this->name = $_name;

    }

    public function getName(){
        return 'Il nome del film è: ' . $this->name;
    }

}