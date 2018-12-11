<?php

require 'Classes/Personnage.php';
require 'Classes/Guerrier.php'; 

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		$monCombattantA = new Personnage("Eva",/*Vie*/ 100, /*Force*/200);
		$monCombattantA->recap();

		$monCombattantB = new Personnage("Bob", /*Vie*/100, /*Force*/200);
		$monCombattantB->recap();


		$monGuerrier = new Guerrier(/*Nom*/"Sophie",/*Vie*/300,/*Force*/40, /*BonusVie*/35, /*BonusForce*/0);
		$monGuerrier->recap();

		$monCombattantA->coup($monGuerrier);


		$monCombattantA->recap();
		$monCombattantB->recap();
		$monGuerrier->recap();

	 ?>

</body>
</html>