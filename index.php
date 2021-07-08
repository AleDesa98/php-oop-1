<?php
    class Movie {
        public $movie_title;
        public $movie_genre;
        public $movie_director;

        // COSTRUTTORE
        function __construct($title, $genre, $director = "Regista non inserito"){
            $this->movie_title = $title;
            $this->movie_genre = $genre;
            $this->movie_director = $director;
        }

        // METODI
        public function nome() {
            if($this->movie_genre == "Azione") {
                $this->movie_genre = "Film d'azione bellissimo";
            }
        }
    }

    $endgame = new Movie("End Game", "Azione");
    $endgame->nome();
    var_dump($endgame);

    $benvenuti_al_sud = new Movie("Benvenuti al Sud", "Commedia", "Luca Miniero");
    $benvenuti_al_sud->nome();
    var_dump($benvenuti_al_sud);
?>