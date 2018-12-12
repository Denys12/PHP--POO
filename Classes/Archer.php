<?php 
class Archer extends Personnage{ // création de l'héritage
    protected $AttFleche;


    public function construct($nom, $vie, $force, $AttFleche){
        parent::construct($nom, $vie, $force); // recupération des variables du parent

        $this->setAttFleche($AttFleche); // attribut des nouvelles stats de la classe fille/ création de l'attaque
        
    }
    public function setAttFleche($AttFleche){ // attribution du bonus de l'attaque pour l'archer 
        $this->AttFleche = $AttFleche;
        $this->force = $this->force + $AttFleche;
    }

    public function getAttFleche(){ // recupération de l'attaque
        return $this->AttFleche;
    }

}