<?php

class Voiture {
    private $marque;
    private $modele;
    private $annee;
    private $kilometrage;
    private $en_marche;
    private $reservoir;

    public function __construct($marque, $modele, $annee, $kilometrage) {
        $this->marque = $marque;
        $this->modele = $modele;
        $this->annee = $annee;
        $this->kilometrage = $kilometrage;
        $this->en_marche = false;
        $this->reservoir = 50;
    }

    public function getMarque() { return $this->marque; }
    public function getModele() { return $this->modele; }
    public function getAnnee() { return $this->annee; }
    public function getKilometrage() { return $this->kilometrage; }
    public function getEnMarche() { return $this->en_marche; }
    public function getReservoir() { return $this->reservoir; }

    public function setMarque($marque) { $this->marque = $marque; }
    public function setModele($modele) { $this->modele = $modele; }
    public function setAnnee($annee) { $this->annee = $annee; }
    public function setKilometrage($kilometrage) { $this->kilometrage = $kilometrage; }

    private function verifierPlein() {
        return $this->reservoir;
    }

    public function demarrer() {
        if ($this->verifierPlein() > 5) {
            $this->en_marche = true;
            echo "La voiture a démarré.\n";
        } else {
            echo "Impossible de démarrer, réservoir trop bas.\n";
        }
    }

    public function arreter() {
        $this->en_marche = false;
        echo "La voiture est arrêtée.\n";
    }
}

// Instanciation d'une voiture
$voiture = new Voiture("Toyota", "Corolla", 2020, 30000);

// Tentative de démarrage
$voiture->demarrer();

// Arrêter la voiture
$voiture->arreter();
