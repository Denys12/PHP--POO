<?php 
class Guerrier extends Personnage{ // création de l'héritage
	protected $bonusPv;
	protected $bonusAttaque;


	public function __construct($nom, $vie, $force, $bonusPv, $bonusAttaque){
		parent::__construct($nom, $vie, $force); // recupération des variables du parent

		$this->setBonusPv($bonusPv); // attribut des nouvelles stats de la classe fille/ création du bonus
		$this->setBonusattaque($bonusAttaque); // idem
	}
	public function setbonusPV($bonusPV){ // attribution du bonus de pv uniquement pour le guerrier 
		$this->bonusPv = $bonusPV;
		$this->vie = $this->vie + $bonusPV;
	}

	public function setbonusAttaque($bonusAttaque){ // attribution du bonus de degat 
		$this->bonusAttaque = $bonusAttaque;
		$this->force = $this->force + $bonusAttaque;
	} 

//test
	public function setForce($force){
		if($force + $this->getbonusAttaque() < 0){
			$this->force = 0;

		}else if($force == 0){
			$this->setBonusAttaque(0);
		}

		$this->force = $force;
	}

//test

	public function getbonusPV(){ // recupération du bonus
		return $this->bonusPV;
	}
	
	public function getbonusAttaque(){
		return $this->bonusAttaque;
	}

}






 
