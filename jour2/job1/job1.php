<?php

class Rectangle {
    private $longueur;
    private $largeur;

    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;
    }

    public function getLongueur() {
        return $this->longueur;
    }

    public function getLargeur() {
        return $this->largeur;
    }

    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }

    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }

    public function afficherInfos() {
        echo "Longueur : " . $this->longueur . "\n";
        echo "Largeur : " . $this->largeur . "\n";
    }
}

// Création d'un rectangle
$rectangle = new Rectangle(10, 5);

echo "Informations initiales du rectangle :\n";
$rectangle->afficherInfos();

// Modification des dimensions
$rectangle->setLongueur(15);
$rectangle->setLargeur(8);

echo "\nInformations après modification :\n";
$rectangle->afficherInfos();
