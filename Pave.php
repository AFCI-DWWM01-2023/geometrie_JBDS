<?php

// Classe Pavé (Parallélépipède à base rectangle)
// 1. Définir les classes en utilisant l’héritage des classes précédentes 
// 2. Définir les assesseurs et constructeurs 
// 3. Ajouter les méthodes suivantes : 
//     - Aire ( ) 
//     - Volume( ) 
// 4 Afficher…( ) : expose les caractéristiques comme suit : 
// Aire : […] - Volume : […]

class Pave extends Rectangle {
    protected $hauteur;

    public function __construct($longueur, $largeur, $hauteur) {
        parent::__construct($longueur, $largeur);
        $this->hauteur = $hauteur;
        
    }
    // Accesseur 
    public function getHauteur() {
        return $this->hauteur;
    }
    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }
    // Les méthodes
    public function aire() {
        return 2*$this->getLongueur() * $this->getLargeur() + 2 * $this->getLongueur()*$this->hauteur + 2 * $this->getLargeur()*$this->hauteur;
    }
    public function volume() {
        return $this->aire() * $this->hauteur;
    }
    public function afficherPave() {
        echo "Pave : " . "<br>";
        echo "Aire : " . $this->aire() . "<br>";
        echo "Volume : " . $this->volume() . "<br>";
    }
}


















?>