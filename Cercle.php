<?php

// 1. Définir une classe Cercle ayant l’attribut suivant : diamètre. 
// 2. Définir à l’aide des propriétés les méthodes d’accès aux attributs de la classe. (Assesseurs) 
// 3. Ajouter un constructeur d’initialisation simple et un contenant tous les attributs 
// 4. Ajouter les méthodes suivantes : 
//     - Périmètre ( ) : retourne le périmètre du cercle. 
//     - Aire( ) : retourne l'aire du cercle. 
//     - AfficherCercle( ) : expose les caractéristiques d’un cercle comme suit : 
//         Diamètre : […]- Périmètre : […] - Aire : […]



class Cercle {
    private $diametre;
    public function __construct($diametre) {
        $this->diametre = $diametre;
    }

    // Les getters

    public function getDiametre() {
        return $this->diametre;
    }

    // Les setters

    public function setDiametre($diametre) {
        $this->diametre = $diametre;
    }

    // Les méthodes



    public function perimetre() {
        return 2 * pi() * $this->diametre;
    }
    public function aire() {
        return pi() * $this->diametre * $this->diametre;
    }
    public function afficherCercle() {
        echo "Cercle : " . "<br>";
        echo "Diamètre : " . $this->diametre . "<br>";
        echo "Périmètre : " . $this->perimetre() . "<br>";
        echo "Aire : " . $this->aire() . "<br>";
        

    }
}














?>