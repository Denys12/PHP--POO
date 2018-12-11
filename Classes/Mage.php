<?php 
class Guerrier extends Personnage{ // création de l'héritage
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

}