<?php
//POO : Programmation Orientée Objet
// => le paradigme de programmation le plus approprié pour que des fonctions utilisent des structures de données.

//Définition d'une class Maison
class Maison {
    //ATTRIBUT
    //encapsulation typage $nomAttribut (= valeur par défaut -> optionnelle)
    private string $nom;
    private float $longueur;
    private float $largeur;
    private int $nbrEtage; 

    //CONSTRUCTEUR
    //les ouvriers qui savent comment construire l'objet
    public function __construct($name, $length, $width, $floor){
        $this->nom = $name; //j'affecte le paramètre name à l'attribut nom  de l'objet en cours de construction ($this)
        $this->longueur = $length;
        $this->largeur = $width;
        $this->nbrEtage = $floor;
    }

    //METHOD
    //les fonctionnalités de notre objet
    //fonction qui permet de générer l'affichage de la superficie de la maison
    public function surface(){
        $superficie = ($this->longueur) * ($this->largeur) * ($this->nbrEtage); 
        echo" 
        <p>La surface de $this->nom est égale à : $superficie m² </p>";
    }
}
