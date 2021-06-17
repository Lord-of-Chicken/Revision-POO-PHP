<?php

class Employe {
   public $nom;
   public $prenom;
   private $age;

   public function __construct($prenom, $nom, $age){
    $this->nom = $nom;
    $this->prenom = $prenom;
    $this->setAge($age);   
   }

   public function setAge($age){
       if (is_int($age) && $age >= 1 && $age <= 120) {
        $this->age = $age;
    } else {
            throw new Exception("L'age devrait etre entre 1 et 120");
        }
   }
       



   public function getAge(){
    return $this->age;

}

   public function presentation() {
    var_dump("Bonjour, je suis $this->prenom $this->nom et j'ai $this->age ans ");

    }
}

$employe1 = new Employe("Gael", "Layeux", 50);
$employe2 = new Employe("Barnar", "Goddi", 50);

//500 lignes de code
$employe1->setAge("jj");

//500 lignes de code


$employe1->presentation(); 
