<?php 
class Mage extends Personnage{ // création de l'héritage
	protected $bonusMagie;



	public function __construct($nom, $vie, $force, $bonusPv, $bonusMagie){
		parent::__construct($nom, $vie, $force); // recupération des variables du parent

		$this->setbonusMagie($bonusMagie); // idem
	
	}

	public function setbonusMagie($bonusMagie){ // attribution du bonus de degat 
		$this->bonusMagie = $bonusMagie;
		$this->force = $this->force + $bonusMagie;
	} 
	
	public function getbonusMagie(){
		return $this->bonusMagie;
	}

	public function jeterUnSort($perso){
		$rand = rand(1,3); //choisie un sort aléatoire

		switch($rand){ //créer le premier sort
			case 1:
				echo "Boule de feu";
				$degat = 35;
				break;
			case 2:
				echo "Tornade";
				$degat = 40;
				break;
		}

		$perso->setVie($Personnage->getVie - $force);
	}

}