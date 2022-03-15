<?php

class Movie {
    public $title;
    public $anno;
    public $genere;
     

    public function __construct($title, $anno, $genere){
        $this->title= $title;
        $this->anno= $anno;
        $this->genere= $genere;
    }


    public function getTitle() {
        return $this->title;
    }

    public function getAnno() {
        return $this->anno;
    }

    public function getGenere() {
        return $this->genere;
    }
}   


 $film = new Movie('star wars', '2022', 'fantasy');
 
 echo "<p>" . $film->getTitle() . "</p>";
 echo "<p>" . $film->getAnno() . "</p>";
 echo "<p>" . $film->getGenere() . "</p>";