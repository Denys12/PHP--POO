<?php  
class Personnage{	//Création d'une classe
	
	//Début définition de variables (Caractéristiques du personnage)

	protected $nom;		
	protected $vie;
	protected $force;

	//Fin définition de variables

	//Début création de fonctions (Valeures du personnage)

	public function __construct($nom, $vie, $force){
		$this->setNom($nom);	//Définition du nom du personnage
		$this->setVie($vie);	 //Définition de la vie de la class
		$this->setForce($force);	//Définition de la force de la class
	}

	public function setNom($nom){
		$this->nom = $nom;
	}



	public function setVie($vie){
		if($vie > 100){

		}else if($vie < 0){
			$vie = 0;
		}

		$this->vie = $vie;
	}

	public function setForce($force){


		$this->force = $force;
	}

	public function getNom(){
		return $this->nom;
	}

	public function getVie(){
		return $this->vie;
	}

	public function getForce(){
		return $this->force;
	}

	public function recap(){ //retour des informations du personnage
		echo "----- INFO" . $this->getNom() . " ----- <br>";
		echo $this->getNom() . " a " . $this->getVie() . ' points de vie <br>';
	}

	public function baffer(Personnage $personnageASaluer){
		echo "<br><br>-----<br><br>";

		echo $this->getNom() . " vient de giffler " . $personnageASaluer->getNom();

		$viePerso = $personnageASaluer->getVie();

		$personnageASaluer->setVie($viePerso - 10);
		
	}


}


?>