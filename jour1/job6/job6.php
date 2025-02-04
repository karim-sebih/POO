<?php

class Personnage {
    private $x;
    private $y;

    public function __construct($x = 0, $y = 0) {
        $this->x = $x;
        $this->y = $y;
    }

    public function gauche() {
        $this->x--;
    }

    public function droite() {
        $this->x++;
    }

    public function haut() {
        $this->y--;
    }

    public function bas() {
        $this->y++;
    }

    public function position() {
        return ["x" => $this->x, "y" => $this->y];
    }
}

// Instanciation de l'objet Personnage
$monPersonnage = new Personnage(5, 5);
echo "Position initiale : (" . $monPersonnage->position()["x"] . ", " . $monPersonnage->position()["y"] . ")\n";

// Déplacer le personnage
$monPersonnage->gauche();
echo "Position après déplacement à gauche : (" . $monPersonnage->position()["x"] . ", " . $monPersonnage->position()["y"] . ")\n";

$monPersonnage->droite();
echo "Position après déplacement à droite : (" . $monPersonnage->position()["x"] . ", " . $monPersonnage->position()["y"] . ")\n";

$monPersonnage->haut();
echo "Position après déplacement en haut : (" . $monPersonnage->position()["x"] . ", " . $monPersonnage->position()["y"] . ")\n";

$monPersonnage->bas();
echo "Position après déplacement en bas : (" . $monPersonnage->position()["x"] . ", " . $monPersonnage->position()["y"] . ")\n";
