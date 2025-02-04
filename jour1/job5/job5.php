<?php

class Animal {
    private $age;
    private $prenom;

    public function __construct() {
        $this->age = 0;
        $this->prenom = "";
    }

    public function vieillir() {
        $this->age++;
    }

    public function nommer($nom) {
        $this->prenom = $nom;
    }

    public function getAge() {
        return $this->age;
    }

    public function getPrenom() {
        return $this->prenom;
    }
}

// Instanciation de l'objet Animal
$monAnimal = new Animal();
echo "Âge initial de l'animal : " . $monAnimal->getAge() . "\n";

// Faire vieillir l'animal
$monAnimal->vieillir();
echo "Âge après vieillissement : " . $monAnimal->getAge() . "\n";

// Nommer l'animal
$monAnimal->nommer("Toufik");
echo "Nom de l'animal : " . $monAnimal->getPrenom() . "\n";
?>