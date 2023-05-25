<?php

// 1. Définir une classe Rectangle ayant les attributs suivants : Longueur et Largeur. 
// 2. Définir à l’aide des propriétés les méthodes d’accès aux attributs de la classe. (Assesseurs) 
// 3. Ajouter un constructeur 
// 4. Ajouter les méthodes suivantes : 
//     - Périmètre ( ) : retourne le périmètre du rectangle.
//     - Aire( ) : retourne l'aire du rectangle. 
//     - EstCarre( ) : vérifie si le rectangle est un carré.
//     - AfficherRectangle( ) : expose les caractéristiques d’un rectangle comme suit : 
//         Longueur : […] - Largeur : […] - Périmètre : […] - Aire : […] - Il s’agit d’un carré / Il 
//         ne s’agit pas d’un carré




class Rectangle {
    private $longueur;
    private $largeur;   



    public function __construct($longueur, $largeur) {
        $this->longueur = $longueur;
        $this->largeur = $largeur;

    }
    // Les getters

    public function getLongueur() {
        return $this->longueur;

    }
    public function getLargeur() {
        return $this->largeur;
    }

    // Les setters
    public function setLongueur($longueur) {
        $this->longueur = $longueur;
    }
    public function setLargeur($largeur) {
        $this->largeur = $largeur;
    }


    
    public function perimetre() {
        return $this->longueur * 2 + $this->largeur * 2;

    }
    public function aire() {
        return $this->longueur * $this->largeur;

    }
    public function estCarre() {
        return $this->longueur === $this->largeur;
        
    }
    public function afficherRectangle() {
        echo "Rectangle : <br>";
        echo "Longueur : " . $this->longueur . "<br>";
        echo "Largeur : " . $this->largeur . "<br>";
        echo "Périmètre : " . $this->perimetre() . "<br>";
        echo "Aire : " . $this->aire() . "<br>";
    

    }
}
















?>