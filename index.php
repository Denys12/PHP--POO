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

<<<<<<< HEAD
		
		$monCombattantA = new Personnage(/*Nom*/"Eva",100/*Vie*/, /*Force*/rand(10,400));
		$monCombattantA->recap();

		$monCombattantB = new Personnage(/*Nom*/"Bob", /*Vie*/100, /*Force*/rand(10,400));
		$monCombattantB->recap();


		$monGuerrier = new Guerrier(/*Nom*/"Sophie",/*Vie*/100,/*Force*/rand(10,400), /*BonusVie*/35, /*BonusForce*/-20);
		$monGuerrier->recap();

		$monCombattantA->coup($monGuerrier);
		$monGuerrier->coup($monCombattantB);
		$monGuerrier->coup($monCombattantA);
		
=======
		$monCombattantA = new Personnage("Eva",/*Vie*/ 100, /*Force*/200);
		$monCombattantA->recap();

		$monCombattantB = new Personnage("Bob", /*Vie*/100, /*Force*/200);
		$monCombattantB->recap();


		$monGuerrier = new Guerrier(/*Nom*/"Sophie",/*Vie*/300,/*Force*/40, /*BonusVie*/35, /*BonusForce*/0);
		$monGuerrier->recap();

		$monCombattantA->coup($monGuerrier);
>>>>>>> master


		$monCombattantA->recap();
		$monCombattantB->recap();
		$monGuerrier->recap();

	 ?>

</body>
</html>