<?php
//Création des attributs de la classe Vehicule 
class Vehicule {
    private string $nomVehicule;
    private int $nbrRoue;
    private float $vitesse;


//constructeur
    public function __construct($name, $wheel, $speed) {
        $this->nomVehicule =$name; 
        $this->nbrRoue = $wheel;
        $this->vitesse = $speed; 
}

//METHODE
    public function detect(){
        if ($this->nbrRoue == 2) {
            $type = "moto";
        }
        else {
            $type = "voiture";
        }
        echo "<p> $this->nomVehicule est une $type </p>";
        return  $type; 
    }

    public function boost (){
        $vitesseBoostee = ($this->vitesse) + 50;
        echo "<p> La nouvelle vitesse de $this->nomVehicule est égale à $vitesseBoostee </p>";
        return $vitesseBoostee; 
    }

    public function plusRapide (){

    
        echo "<p> Le véhicule le plus rapide est $this->nomVehicule </p>";
    }
    }

    