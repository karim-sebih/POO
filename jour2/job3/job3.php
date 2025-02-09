<?php

class Livre {
    private $titre;
    private $auteur;
    private $nombrePages;
    private $disponible;

    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages);
        $this->disponible = true;
    }

    public function getTitre() {
        return $this->titre;
    }

    public function getAuteur() {
        return $this->auteur;
    }

    public function getNombrePages() {
        return $this->nombrePages;
    }

    public function setTitre($titre) {
        $this->titre = $titre;
    }

    public function setAuteur($auteur) {
        $this->auteur = $auteur;
    }

    public function setNombrePages($nombrePages) {
        if (is_int($nombrePages) && $nombrePages > 0) {
            $this->nombrePages = $nombrePages;
        } else {
            echo "Erreur : Le nombre de pages doit être un entier positif.\n";
        }
    }

    public function verification() {
        return $this->disponible;
    }

    public function emprunter() {
        if ($this->verification()) {
            $this->disponible = false;
            echo "Le livre a été emprunté.<br>\n";
        } else {
            echo "Le livre n'est pas disponible.<br>\n";
        }
    }

    public function rendre() {
        if (!$this->verification()) {
            $this->disponible = true;
            echo "Le livre a été rendu.<br>\n";
        } else {
            echo "Le livre était déjà disponible.<br>\n";
        }
    }

    public function afficherInfos() {
        echo "Titre : " . $this->titre . "<br>\n";
        echo "Auteur : " . $this->auteur . "<br>\n";
        echo "Nombre de pages : " . $this->nombrePages . "<br>\n";
        echo "Disponibilité : " . ($this->disponible ? "Disponible" : "Emprunté") . "<br>\n";
    }
}

// Création d'un livre
$livre = new Livre("1984", "George Orwell", 328);

echo "Informations initiales du livre :\n";
$livre->afficherInfos();

// Emprunter le livre
$livre->emprunter();
$livre->afficherInfos();

// Rendre le livre
$livre->rendre();
$livre->afficherInfos();

