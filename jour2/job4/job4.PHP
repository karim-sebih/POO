<?php

class Student {
    private $nom;
    private $prenom;
    private $numEtudiant;
    private $credits;
    private $level;

    public function __construct($nom, $prenom, $numEtudiant) {
        $this->nom = $nom;
        $this->prenom = $prenom;
        $this->numEtudiant = $numEtudiant;
        $this->credits = 0;
        $this->level = $this->studentEval();
    }

    public function addCredits($credits) {
        if ($credits > 0) {
            $this->credits += $credits;
            $this->level = $this->studentEval();
        } else {
            echo "Erreur : Le nombre de crédits doit être supérieur à zéro.\n";
        }
    }

    private function studentEval() {
        if ($this->credits >= 90) {
            return "Excellent";
        } elseif ($this->credits >= 80) {
            return "Très bien";
        } elseif ($this->credits >= 70) {
            return "Bien";
        } elseif ($this->credits >= 60) {
            return "Passable";
        } else {
            return "Insuffisant";
        }
    }

    public function studentInfo() {
        echo "Nom : " . $this->nom ."<br>". "\n";
        echo "Prénom : " . $this->prenom . "<br>". "\n";
        echo "Numéro étudiant : " . $this->numEtudiant ."<br>". "\n";
        echo "Crédits : " . $this->credits ."<br>". "\n";
        echo "Niveau : " . $this->level ."<br>". "\n";
    }
}

// Instanciation de l'étudiant John Doe
$etudiant = new Student("Doe", "John", 145);

// Ajout de crédits
$etudiant->addCredits(10);
$etudiant->addCredits(25);
$etudiant->addCredits(30);

// Affichage des informations de l'étudiant
$etudiant->studentInfo();
