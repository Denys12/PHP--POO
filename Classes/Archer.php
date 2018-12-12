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

    public function coup($persoAttaque){
        $rand = rand(1,3); //choisie un sort aléatoire

        switch($rand){ //créer le premier sort
            case 1:
                echo "Fleche en feu<br>";
                $degat = 6 * $this->force;
                break;
            case 2:
                echo "Deux fleches<br>";
                $degat = 4;
                break;
            case 3:
                echo $this->getNom() . "vien de se planter une flèche dans le pied, quelle erreur!<br>";
                $degat = -15;
                break;
        }

        $persoAttaque->setVie($persoAttaque->getVie() - $degat);
    }

}