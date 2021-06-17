<?php

class Employe {
   public $nom;
   public $prenom;
   public $age;

   public function __construct($prenom, $nom, $age){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->age = $age;   
   }

   public function presentation() {
    var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans ");

    }
}

$employe1 = new Employe("Gael", "Layeux", 43);
$employe2 = new Employe("Barnar", "Goddi", 50);


$employe1->presentation(); 