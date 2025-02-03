<?php 

class Personne{

    public string $nom;
    public string $prenom;
    
    
    public function __construct($nom,$prenom){
    $this->nom=$nom;
    $this->prenom=$prenom;
    }
public function Sepresenter(){

    return "je suis " . $this->prenom ."  ".$this->nom ."<br>";
}

}


$personne = new Personne("Doe","John");
echo $personne->Sepresenter();

$personne = new Personne("Dupont","Jean");
echo $personne->Sepresenter();



?>