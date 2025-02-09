<?php

class Livre {
    private $titre;
    private $auteur;
    private $nombrePages;

    public function __construct($titre, $auteur, $nombrePages) {
        $this->titre = $titre;
        $this->auteur = $auteur;
        $this->setNombrePages($nombrePages);
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

    public function afficherInfos() {
        echo "Titre : " . $this->titre . "\n";
        echo "Auteur : " . $this->auteur . "\n";
        echo "Nombre de pages : " . $this->nombrePages . "\n";
    }
}

// Création d'un livre
$livre = new Livre("1697", "Charles PerraultFrères Grimm", 328);

echo "Informations initiales du livre :\n";
$livre->afficherInfos();

// Modification des attributs
$livre->setTitre("Chaperon rouge");
$livre->setAuteur("Charles PerraultFrères Grimm");
$livre->setNombrePages(112);

echo "\nInformations après modification :\n";
$livre->afficherInfos();

