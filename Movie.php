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

    // echo $matrix -> title . " ";

    $matrix -> genre = "Scify";

    // echo ($matrix -> genre . " ");

    $matrix -> setYears (1999, 1994);

    // echo $matrix -> years_production . " ";

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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class</title>
</head>
<body>
    <h1><?php echo $matrix -> title ?></h1>
    <h2><?php echo $matrix -> genre ?></h2>
    <h4><?php echo "Anni di produzione: ".$matrix -> years_production ?></h4>
    <?php foreach ($matrix -> actors as $element) { ?>
       <ul><li> <?php  echo $element; ?> </li> </ul>
    <?php }?>
    <p><?php echo $matrix -> plot ?></p>

</body>
</html>


