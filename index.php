<!DOCTYPE html>
<html>
<head>
	<title>POO</title>
	<meta charset="utf-8" />
        <link rel="stylesheet" href="./style.css" />
</head>
<body>
	<h1>Dans une galaxie for for lointaine</h1>
	<?php 


require 'Classes/Personnage.php';
require 'Classes/Guerrier.php'; 
require 'Classes/Mage.php'; 

		
		$monCombattantA = new Personnage(/*Nom*/"Eva",100/*Vie*/, /*Force*/rand(10,100));
		$monCombattantA->recap();

		$monCombattantB = new Personnage(/*Nom*/"Bob", /*Vie*/100, /*Force*/rand(10,100));
		$monCombattantB->recap();


		$monGuerrier = new Guerrier(/*Nom*/"Sophie",/*Vie*/100,/*Force*/rand(10,100), /*BonusVie*/35, /*BonusForce*/-20);
		$monGuerrier->recap();

		$monMage = new Mage(/*Nom*/"Gandalf",/*Vie*/1,/*Force*/rand(1,2), /*BonusVie*/0, /*BonusForce*/-20);
		$monMage->recap();

		/*

		$monCombattantA->coup($monGuerrier);
		$monGuerrier->coup($monCombattantB);
		$monCombattantB->coup($monCombattantA);
		

		$monCombattantA->recap();
		$monCombattantB->recap();
		$monGuerrier->recap();

		*/





		$arene = [$monCombattantA, $monCombattantB, $monGuerrier, $monMage]; //tableau contennant les combatents

		while(sizeof($arene) != 1){
			$i = rand(0, sizeof($arene)-1);
			$j = rand(0, sizeof($arene)-1);

			if($i != $j){ //empeche un combatent de se suicider

				$firstFighter 	= $arene[$i];  //Combat aléatoire entre deux personnages
				$secondFighter 	= $arene[$j];


				echo '<br>----- ' . $firstFighter->getNom() . ' va démonter ' . $secondFighter->getNom() . ' -----<br>';

				//unset($arene[$i]);
				array_splice($arene, $j, 1);//suprime du tableau le combatent mort

				$firstFighter->coup($secondFighter);
				if($secondFighter->getVie() > 0){
					array_push($arene, $secondFighter);
				}

				$secondFighter->recap();
			}
		}

			  echo $arene[0]->getNom() . ' Win';
		

	 ?>


</body>
</html>