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
		if($vie < 0){
			$vie = 0;
			echo " ".$this->getNom() . " est mort(e) <br><br>";
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
		
		echo $this->getNom() . " a " . $this->getVie() . ' points de vie <br>';
	}

	/*public function baffer(Personnage $personnageASaluer){
		echo "<br><br>------------------------------------<br><br>";

		echo $this->getNom() . " vient de giffler " . $personnageASaluer->getNom() . "<br>";

		$viePerso = $personnageASaluer->getVie();

		//$personnageASaluer->setVie($viePerso - 50);


		
	}
*/
	public function jouer($persoAttaque){
        if(rand(0, 200) > 150){
            $this->prendreUnePotion();
        }else {
            $this->attaquer($persoAttaque);
        }
    }

	public function attaquer/*=coup*/($persoAttaque){
		

		echo " ".$this->getNom() . " vas de mettre un coups à " . $persoAttaque->getNom() . "<br>";


		$this->recapApresAttaque($persoAttaque);

		$viePerso = $persoAttaque->getVie();

		$persoAttaque->setVie($viePerso -  $this->force);
	}

	protected function recapApresAttaque($persoAttaque, $degat = null){

		if($degat == null){
			$degat = $this->getForce();
		}
		echo $persoAttaque->getNom() . " a " . $persoAttaque->getVie() . ' points de vie <br>';

		if($degat >100){
                echo "Coup CRITIQUE!!!!";
            }
		

		echo $this->getNom() . " a mis " . $degat . ' points de dommage <br>';
	}


	public function prendreUnePotion(){
        $this->setVie($this->getVie() + 30);

        echo $this->getNom() . " vient de boire une potion.<br>" . $this->getNom() . " a " . $this->getVie() . 'points de vie <br>';
    }

}
/*Test
	protected function prendreUnePotion($perso){
           $probaHeal = rand(1,10);
           if ($probaHeal = 1){
           	echo $this->getNom() . ' bois une potion';
			$this->setVie($this->getVie() + 20);
    	} 
    }
  }
test*/



?>