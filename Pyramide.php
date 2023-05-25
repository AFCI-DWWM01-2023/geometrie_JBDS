<?php

// Pyramide base triangle 
// 1. Définir les classes en utilisant l’héritage des classes précédentes 
// 2. Définir les assesseurs et constructeurs 
// 3. Ajouter les méthodes suivantes : 
//     _ aire ( ) 
//     - Volume( ) 
// 4.- Afficher…( ) : expose les caractéristiques comme suit : 
// Aire : […] - Volume : […]


class Pyramide extends Triangle {
    protected $hauteurPyramide;

    public function __construct($base, $hauteur, $hauteurPyramide) {
        parent::__construct($base, $hauteur);
        $this->hauteurPyramide = $hauteurPyramide;
    }
    // Accesseur
    public function getHauteurPyramide() {
        return $this->hauteurPyramide;
    }
    public function setHauteurPyramide($hauteurPyramide) {
        $this->hauteurPyramide = $hauteurPyramide;
    }
    // Les méthodes
    public function aire() {
        return $this->getBase() * $this->getHauteur();
    }
    public function volume() {
        return $this->aire() * $this->hauteurPyramide;
    }
    public function afficherPyramide() {
        echo "Pyramide : " . "<br>";
        echo "Aire : " . $this->aire() . "<br>";
        echo "Volume : " . $this->volume() . "<br>";
    }

    }
        
    


    











?>