<?php

require 'Classes/Personnage.php';
require 'Classes/Guerrier.php'; 

?>

<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
</head>
<body>
	<h1>FIGHT</h1>
	<?php 


		
		$monCombattantA = new Personnage(/*Nom*/"Eva",100/*Vie*/, /*Force*/rand(10,100));
		$monCombattantA->recap();

		$monCombattantB = new Personnage(/*Nom*/"Bob", /*Vie*/100, /*Force*/rand(10,100));
		$monCombattantB->recap();


		$monGuerrier = new Guerrier(/*Nom*/"Sophie",/*Vie*/100,/*Force*/rand(10,100), /*BonusVie*/35, /*BonusForce*/-20);
		$monGuerrier->recap();

		/*

		$monCombattantA->coup($monGuerrier);
		$monGuerrier->coup($monCombattantB);
		$monCombattantB->coup($monCombattantA);
		

		$monCombattantA->recap();
		$monCombattantB->recap();
		$monGuerrier->recap();

		*/





		$arene = [$monCombattantA, $monCombattantB, $monGuerrier]; //tableau contennant les combatents

		while(sizeof($arene) != 1){
			$i = rand(0, sizeof($arene)-1);
			$j = rand(0, sizeof($arene)-1);

			if($i != $j){ //empeche un combatent de se suicider

				$firstFighter 	= $arene[$i];  //Combat aléatoire entre deux personnages
				$secondFighter 	= $arene[$j];


				echo '----- ' . $firstFighter->getNom() . ' va démonter ' . $secondFighter->getNom() . ' -----<br><br>';

				//unset($arene[$i]);
				array_splice($arene, $j, 1);

				$firstFighter->coup($secondFighter);
				if($secondFighter->getVie() > 0){
					array_push($arene, $secondFighter);
				}

				$secondFighter->recap();
			}
		}

	 ?>


</body>
</html>