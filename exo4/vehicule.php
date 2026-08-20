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
    public function detect(): string{
        if ($this->nbrRoue == 2) {
            $type = "moto";
        }
        else {
            $type = "voiture";
        }
        echo "<p> $this->nomVehicule est une $type </p>";
        return  $type; 
    }


// attention pour avoir un affichage, donc "echo" en dehors de la méthode, il faut utilisé un getter avant la méthode 
// ici par exemple, écrire un getVitesse et un return Vitesse. Ainsi on pourrait afficher la vitesse dans test
    // public function boost () {
    //     $vitesseBoostee = ($this->vitesse) + 50;
    //     echo "<p> La nouvelle vitesse de $this->nomVehicule est égale à $vitesseBoostee </p>";
    //     return $vitesseBoostee; 
    // }

    // ce code ci-dessus est faux car, la vitesse boostée n'est pas prise en compte. Et vu que la variable est 
    // déclarée dans la fonction, elle est locale et je ne peux l'utiliser en dehors de la fonction comme une propriété de l'objet
    // ce qui fait que la vitesse que je réutilise dans la fonction plusRapide est l'initiale et non la boosté. *
    // Si je veux conserver echo à l'intérieur de ma fonction voici la correction ci-dessous : 


    public function boost () {
        $this->vitesse = $this->vitesse + 50;
        echo "<p> La nouvelle vitesse de $this->nomVehicule est égale à $this->vitesse </p>";
         return $this->vitesse ; 
    }


    public function getnomVehicule():string {
        return $this->nomVehicule; 
    }

    //bonne pratique à conserver ici plutot que les informations
    public function plusRapide (Vehicule $autreVehicule): Vehicule {
        if($this->vitesse > $autreVehicule->vitesse){
            return $this;
        } 
            return $autreVehicule; 
    }
}
    