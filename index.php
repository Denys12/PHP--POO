<?php

require 'Classes/Personnage.php';


?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

	<?php 

		$monCombattantA = new Personnage("Bob", 90, 200);
		$monCombattantA->recap();

		$monCombattantB = new Personnage("Anna", 90, 200);
		$monCombattantB->recap();


		$monCombattantA->baffer($monCombattantB);

		$monCombattantB->recap();

	 ?>

</body>
</html>