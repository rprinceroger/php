<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Classes and Objects</title>
</head>
<body>
	<h1>Classes and Objects</h1>
	<pre><?php var_dump($buildingObj); ?></pre>


	<!-- Accessing the name property of the object -->
	<p>Building Name: <?php echo $buildingObj->name; ?></p>

	<!-- Create a bootcamper object name, hobbies, and favorites game with the use of echo, I need to see the name, hobbies and favorite game in your index.php -->
	
	<h2>Bootcamper Details:</h2>
	<pre><?php var_dump($roger); ?></pre>

	<p><?php echo "Name: " . $roger->name . "<br>"; ?></p>
	<p><?php echo "Hobbies: " . $roger->hobbies . "<br>"; ?></p>
	<p><?php echo "Favorite Game: " . $roger->favoriteGame . "<br>"; ?></p>

	<h2>Objects from Classes</h2>
	<pre><?php var_dump($building); ?></pre>
	<p>printName() Method: <?= $building->printName()?></p>

	<h2>Inheritance (Condominium Object)</h2>
	<pre><?php var_dump($condominium); ?></pre>
	<p>printName() Method: <?= $condominium->printName() ?></p>


	<!-- Mini Activity
	Create a bootcamper class and add the properties: name, hobbies, favorite game, favorite food. Create as well an in instroduce method for your bootcamper object

	Create 2 instances of the bootcamper class

	Show it in your index.php


	 -->





</body>
</html>