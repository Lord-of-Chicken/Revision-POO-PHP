<?php

abstract class Humain
{
    public $nom;
    public $prenom;
    protected $age;

    public function __construct($prenom, $nom, $age)
    {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->setAge($age);
    }
    abstract public function travailler();

    public function setAge($age)
    {
        if (is_int($age) && $age >= 1 && $age <= 120) {
            $this->age = $age;
        } else {
            throw new Exception("L'age devrait etre entre 1 et 120");

        }
    }
    public function getAge()
    {
        return $this->age;
    }
}

class Employe extends Humain
{
    public function travailler()
    {
        return "je suis un employé et je travail.";
    }


    public function presentation()
    {
        var_dump("Salut, je suis $this->prenom $this->nom et j'ai $this->age ans ");
    }
}
class Patron extends Employe
{
    public $voiture;
    public function __construct($prenom, $nom, $age, $voiture)
    {
        parent::__construct($prenom, $nom, $age);
        $this->voiture = $voiture;
    }

    public function presentation()
    {
        var_dump("Salut, je suis $this->prenom $this->nom et j'ai $this->age ans et j'ai une voiture");
    }

    public function rouler()
    {
        var_dump("Bonjour, je roule avec ma $this->voiture");
    }
    public function travailler()
    {
        return "je suis le patron et je bosse aussi!";
    }
}

class Etudiant extends Humain
{
    public function travailler()
    {

        return "je suis un étudiant et je révise";
    }
}

function faireTravailler(Humain $objet)
{
    var_dump("Travail en cours : {$objet->travailler()}");
}

$employe1 = new Employe("Gael", "Layeux", 50);
$employe2 = new Employe("Barnar", "Goddi", 50);
$patron = new Patron("Blips", "mars", 50, "porsche");
$etudiant = new Etudiant("Barnar", "Goddi", 50);
$age = (120);
$employe1->presentation();
$employe2->presentation();
$patron->presentation();
$patron->rouler();
faireTravailler($patron);
faireTravailler($employe1);
faireTravailler($etudiant);
