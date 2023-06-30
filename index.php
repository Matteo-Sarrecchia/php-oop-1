<?php

class Movie {

    public $title;
    public $type;
    public $description;


    public function __construct($title, $type, $description) {

        $this -> title = $title;
        $this -> type = $type;
        $this -> description = $description;
    }

    public function getFullname() {

        return $this -> title . " " . $this -> type . " " . $this -> description;
    }
}

$movie1 = new Movie (
    "Inception", 
    "Azione", 
    "Dominic 'Dom' Cobb è un 'estrattore', un professionista che si occupa di estrarre segreti dalle menti delle persone mentre queste dormono, infiltrandosi nei loro sogni tramite uno speciale apparecchio che permette a un gruppo di partecipare a un 'sogno condiviso'.");


$movie2 = new Movie (
    "Doctor Strange",
    "Azione / Avventura",
    "Un medico resta vittima di un tragico incidente, ma viene aiutato da uno stregone che lo inizia alle arti magiche, grazie alle quali egli riesce a redimersi e a combattere le forze oscure che minacciano l'umanità."
);

$movie3 = new Movie (
    "Hercules",
    "Avventua / Musical",
    "Hercules, figlio di Zeus e Hera, è metà divinità e metà uomo e vuole dimostrare di essere un vero eroe per meritarsi un posto sul Monte Olimpo."
);

//  var_dump($movie1);

//  echo "<br><br>";
 
//  var_dump($movie2);

//  echo "<br><br>";

//  var_dump($movie3);
 