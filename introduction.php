<?php

interface Travailleur
{
    public function travailler();

}
class Employe implements Travailleur
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

    public function travailler()
    {
         return "je suis un employé et je travail.";
    }

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

    public function presentation(){
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

$employe1 = new Employe("Gael", "Layeux", 50);
$employe2 = new Employe("Barnar", "Goddi", 50);
$patron = new Patron("Blips", "mars", 50, "porsche");

$employe1->presentation();
$employe2->presentation();
$patron->presentation();
$patron->rouler();

class Etudiant implements Travailleur{
public function travailler()
{

return "je suis un étudiant et je révise";
}
}

$etudiant = new Etudiant();

faireTravailler($patron);
faireTravailler($employe1);
faireTravailler($etudiant);


function faireTravailler(Travailleur $objet){
    var_dump("Travail en cours : {$objet->travailler()}");
}