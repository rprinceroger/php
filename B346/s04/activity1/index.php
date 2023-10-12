<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Access Modifiers and Encapsulation</title>
</head>
<body>
	<?php

	$building = new Building('Caswyn Building', 8, 'Timog Avenue, Quezon City, Philippines');
    $condominium = new Condominium('Enzo Condo', 5, 'Buendia Avenue, Makati City, Philippines');

    echo "<h2>Building</h2>";
    echo "The name of the building is " . $building->getName() . ".<br>";
    echo "The " . $building->getName() . " has " . $building->getFloors() . " floors.<br>";
    echo "The " . $building->getName() . " is located at " . $building->getAddress() . ".<br>";

    $building->setName('Caswyn Complex');
    echo "The name of the building has been changed to " . $building->getName() . ".<br>";

    echo "<h2>Condominium</h2>";
    echo "The name of the condominium is " . $condominium->getName() . ".<br>";
    echo "The " . $condominium->getName() . " has " . $condominium->getFloors() . " floors.<br>";
    echo "The " . $condominium->getName() . " is located at " . $condominium->getAddress() . ".<br>";

    $condominium->setName('Enzo Tower');
    echo "The name of the condominium has been changed to " . $condominium->getName() . ".<br>";
    ?>
</body>
</html>