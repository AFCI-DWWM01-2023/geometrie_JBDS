<?php

// Classe Sphère :
// 1. Définir les classes en utilisant l’héritage des classes précédentes 
// 2. Définir les assesseurs et constructeurs 
// 3. Ajouter les méthodes suivantes : 
//     - Aire ( ) 
//     - Volume( ) 
// 4- Afficher…( ) : expose les caractéristiques comme suit : 
//     Aire : […] - Volume : […]


class Sphere {
    public function __construct($rayon) {
        $this->rayon = $rayon;
        

    }

    // Methodes

    public function aire() {
        return 4 * pi() * pow($this->rayon, 2); 

    }

    public function volume() {
        return (4 / 3) * pi() * pow($this->rayon, 3);
        

    }
    public function afficherSphere() {
        echo "Sphere : " . "<br>";
        echo "Aire : " . $this->aire() . "<br>";
        echo "Volume : " . $this->volume() . "<br>";
    }



}


?>