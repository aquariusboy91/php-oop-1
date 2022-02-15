<?php

    class Movie {

        public $title;
        public $actors;
        public $genre; 
        public $movie_director;
        public $plot; 
        public $year_production; 
        public $years_production;
        public $launch;

        function __construct($_genre) {
            $this -> genre = $_genre;
        }

        public function setYears ($launch, $year_production) {
            $this -> years_production = $launch - $year_production;
        }
    }




    $matrix = new Movie ('');
    $matrix -> title = "Matrix";
    echo $matrix -> title;
    $matrix = new Movie ("scify");
    echo $matrix -> genre;
    $matrix -> setYears (1999, 1994);
    echo $matrix -> years_production;
    $matrix -> actors = 
    ["Keanu Reeves",
    "Laurence Fishburne",
    "Carrie-Anne Moss",
    "Hugo Weaving",
    "Gloria Foster",
    "Joe Pantoliano",
    "Marcus Chong",
    "Paul Goddard",
    "Robert Taylor",
    "Julian Arahanga",
    "Matt Doran",
    "Belinda McClory",
    "Anthony Ray Parker"];
    $matrix -> movie_director = "Andy e Larry Wachowski";
    $matrix -> plot =" 
        Thomas Anderson lavora presso la Metacortex come programmatore di software. Di giorno è un cittadino modello,
        rispettoso della legge, mentre di notte vive una seconda vita, 
        come un hacker sotto lo pseudonimo di 'Neo'[3], e in questa veste ha commesso praticamente tutti gli illeciti
        informatici possibili. Sorvegliato dagli agenti Smith, Brown e Jones, viene arrestato e gli viene inserita una 
        cimice nel corpo per seguirlo.

        Una notte, compaiono sul monitor di Anderson una serie di frasi criptiche riguardo a qualcosa chiamato 
        'Matrix'. Desideroso di sapere cosa sia, accetta una richiesta di contatto da parte di Trinity, esperta hacker 
        braccio destro del misterioso Morpheus, che lo conduce da lui dopo avergli estirpato la cimice. Neo chiede di 
        conoscere di più riguardo al loro operato e questi si offrono di rivelargli il vero mondo in cui vivono.
        Dopo aver ingerito la pillola, si sveglia bruscamente, nudo, immerso in un liquido viscoso di un'incubatrice, 
        con il corpo collegato a cavi elettrici, realizzando di essere all'interno di una tra tante enormi torri 
        circolari che ospitano miliardi di incubatrici contenenti esseri umani."



    
?>

