<?php

class Commande {
    private $numeroCommande;
    private $plats;
    private $statut;

    public function __construct($numeroCommande) {
        $this->numeroCommande = $numeroCommande;
        $this->plats = [];
        $this->statut = "en cours";
    }

    public function ajouterPlat($nom, $prix) {
        $this->plats[] = ["nom" => $nom, "prix" => $prix];
    }

    public function annulerCommande() {
        $this->statut = "annulée";
        $this->plats = [];
    }

    private function calculerTotal() {
        $total = 0;
        foreach ($this->plats as $plat) {
            $total += $plat["prix"];
        }
        return $total;
    }

    public function calculerTVA($taux) {
        return $this->calculerTotal() * ($taux / 100);
    }

    public function afficherCommande() {
        echo "Commande #" . $this->numeroCommande ."<br>". "\n";
        echo "Statut : " . $this->statut ."<br>". "\n";
        echo "Plats commandés :\n";
        foreach ($this->plats as $plat) {
            echo "- " . $plat["nom"] . " : " . $plat["prix"] . "€\n"."<br>";
        }
        echo "Total : " . $this->calculerTotal() . "€\n"."<br>";
        echo "TVA (20%) : " . $this->calculerTVA(20) . "€\n"."<br>";
    }
}

// Création d'une commande
$commande = new Commande(101);
$commande->ajouterPlat("Pizza", 12);
$commande->ajouterPlat("Pâtes", 10);
$commande->ajouterPlat("Salade", 8);
$commande->afficherCommande();

// Annulation de la commande
$commande->annulerCommande();
$commande->afficherCommande();
