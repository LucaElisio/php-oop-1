<?php

class Genre {
    private string $genre;

    public function __construct(string $genre) {
        $this->genre = $genre;
    }

    public function setGenre (string $_genre) {
        if(strlen($_genre) > 20) {
            throw new Exception("Genere inesistente");
        }

        $this->genre = $_genre;
    }

    public function getGenre(){
        return $this->genre;
    }

}

