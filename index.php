<?php

require 'Classes/Personnage.php';
require 'Classes/Guerrier.php'; 
require 'Classes/Mage.php'; 
require 'Classes/Archer.php'; 

		
		// Nom, Vie, Force, BonusVie, BonusForce
		$monCombattantA = new Personnage("Eva",100, rand(10,100));

		$monCombattantB = new Personnage("Bob", 100, rand(10,100));

		$monGuerrier = new Guerrier("Sophie",100, rand(10,100), 35, -20);

		$monMage = new Mage("Gandalf",200,0, 0, 20);

		$monArcher = new Archer("Jean",250,rand(30,100), -30, -20, 10, 20);	

		$arene = [$monCombattantA, $monCombattantB, $monGuerrier, $monMage, $monArcher];
?>

<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
	<meta charset="utf-8" />
        <link rel="stylesheet" href="./style.css" />
</head>
<body>
	<h1>Dans une galaxie fort fort lointaine</h1>

	<?php
		echo "<p>Bienvenu dans l'arène ! Aujourd'hui ";
		foreach($arene as $combattant): //mette chaque personnages de l'arène dans la variable combattant
			echo $combattant->getNom() . ', ';
		//affiche le nom de chaque combattant
		endforeach;

		echo 'vont combattrent. Faites vos jeux.<br><br>----- INFO -----</p>';

		foreach($arene as $combattant):
			echo '<br>';
			echo $combattant->recap();
			//affiche la vie de chaque combattant
		endforeach



	?>  

	<?php 
		 //tableau contennant les combatents

		while(sizeof($arene) != 1){
			$i = rand(0, sizeof($arene)-1);
			$j = rand(0, sizeof($arene)-1);

			if($i != $j){ //empeche un combatent de se suicider

				$firstFighter 	= $arene[$i];  //Combat aléatoire entre deux personnages
				$secondFighter 	= $arene[$j];


				echo '<br>----- ' . $firstFighter->getNom() . ' va attaquer ' . $secondFighter->getNom() . ' -----<br>';

				array_splice($arene, $j, 1);//suprime du tableau le combatent mort

				$firstFighter->jouer($secondFighter);
				if($secondFighter->getVie() > 0){
					array_push($arene, $secondFighter);
				}

				$secondFighter->recap();
			}
		}

			  echo $arene[0]->getNom() . '<br><br>----- Win!!! -----';

	
	 ?>


</body>
</html>