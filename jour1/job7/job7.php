<?php

class Cercle {
    private $rayon;

    public function __construct($rayon) {
        $this->rayon = $rayon;
    }

    public function changerRayon($nouveauRayon) {
        $this->rayon = $nouveauRayon;
    }

    public function circonference() {
        return 2 * M_PI * $this->rayon;
    }

    public function aire() {
        return M_PI * pow($this->rayon, 2);
    }

    public function diametre() {
        return 2 * $this->rayon;
    }

    public function afficherInfos() {
        echo "Rayon : " . $this->rayon . "\n";
        echo "Diamètre : " . $this->diametre() . "\n";
        echo "Circonférence : " . $this->circonference() . "\n";
        echo "Aire : " . $this->aire() . "\n";
    }
}

// Création de deux cercles
$cercle1 = new Cercle(4);
$cercle2 = new Cercle(7);

// Affichage des informations des cercles
echo "Informations du premier cercle :\n";
$cercle1->afficherInfos();

echo "\nInformations du deuxième cercle :\n";
$cercle2->afficherInfos();
