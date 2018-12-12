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
	//Liste de sort du mage
	public function coup($persoAttaque){
		$rand = rand(1,3); //choisie un sort aléatoire

		switch($rand){ //créer le premier sort
			case 1:
				echo $this->getNom() ." lance une boule de feu sur " . ($persoAttaque->getNom()) .".<br>";
				$degat = 3 * $this->force;
				break;
			case 2:
				echo $this->getNom() ." lance une tornade sur ". ($persoAttaque->getNom()).".<br>";
				$degat = 4;
				break;
			case 3:
				echo $this->getNom() . " vien de soingner son adversaire, quelle erreur! <br>";
				$degat = -5;
				break;
		}

		$this->recapApresAttaque($persoAttaque);

		$persoAttaque->setVie($persoAttaque->getVie() - $degat);
	}

}