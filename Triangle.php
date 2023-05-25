<?php

// 1. Définir une classe Triangle ayant les attributs suivants : Base et Hauteur. 
// 2. Définir à l’aide des propriétés les méthodes d’accès aux attributs de la classe. (Assesseurs) 
// 3. Ajouter un constructeur 
// 4. Ajouter les méthodes suivantes : 
//     - Périmètre ( ) : retourne le périmètre du triangle. 
//     - Aire( ) : retourne l'aire du triangle. 
//     - AfficherTriangle( ) : expose les caractéristiques d’un triangle comme suit : 
//         Base : […] - Hauteur : […] - Périmètre : […] - Aire : […]


class Triangle {
    private $base;
    private $hauteur;

    public function __construct($base, $hauteur) {
        $this->base = $base;
        $this->hauteur = $hauteur;  
    }
    // Les getters
    public function getBase() {
        return $this->base;

    }
    public function getHauteur() {
        return $this->hauteur;
    }
    // Les setters
    public function setBase($base) {
        $this->base = $base;
    }
    public function setHauteur($hauteur) {
        $this->hauteur = $hauteur;
    }
    // Les méthodes
    public function perimetre() {
        return $this->base * 2 + $this->hauteur * 2;

    }
    public function aire() {
        return $this->base * $this->hauteur;

    }
    public function estCarre() {
        return $this->base === $this->hauteur;
    }
    public function afficherTriangle() {
        echo "Triangle : " . "<br>";
        echo "Base : " . $this->base . "<br>";
        echo "Hauteur : " . $this->hauteur . "<br>";
        echo "Périmètre : " . $this->perimetre() . "<br>";
        echo "Aire : " . $this->aire() . "<br>";
        
    

    }

}













?>