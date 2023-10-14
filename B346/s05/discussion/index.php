Logo
Issues
Pull Requests
Milestones
Explore
 Create…
Prince Roger Marcaida Robielos Profile and Settings…
B346
/
b346-resources
Private
Code
Issues
Pull Requests
Packages
Projects
Releases
Wiki
Activity
b346-resources/s05/discussion1/index.php
77 lines
1.9 KiB
PHP
<?php

	//[Super Global Variables]
	//predefined "global variables" - they can be used wherever needed
	//written with "$" and followed by uppercase word: $_GET, $_POST
	//All of the superglobal variables act as "associative arrays" that use "string value" as a key to access values
	
	//$_GET and $_POST are examples of super global variables in PHP
		// These let you retrieve information sent by the client

	$tasks = ["Get Git", "Bake HTML", "Eat CSS", "Learn PHP"];

	//has data input in the form of GET requests
	echo '$_GET: </br>';
	var_dump($_GET);

	echo '<br></br>';

	echo '$POST: </br>';
	var_dump($_POST);

	echo '<br>';

	//isset() function is used to determine if the variable/index is set or not
		//whether a variable or an array element exist and is not null
	if(isset($_GET["index"])){

		//The $_GET super global variable will retrieve a value from the URL, wherein it will look for the parameter
		//The value of index will be stored in the variable "$indexGet"
		$indexGet = $_GET["index"];

		
		echo "The retrieved task from GET is $tasks[$indexGet]. <br>";
	}

	if(isset($_POST["index"])){
		$indexPost = $_POST["index"];
		echo "The retrieved task from POST is $tasks[$indexPost]. <br>";
	}

?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>($_GET and $_POST)</title>
	</head>
	<body>
	    
		<h1>Task index from GET</h1>
		<form method="GET">
			<select name="index" required>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>

			<button type="submit">GET</button>
		</form>

		<h1>Task index from POST</h1>
		<form method="POST">
			<select name="index" required>
				<option value="0">0</option>
				<option value="1">1</option>
				<option value="2">2</option>
				<option value="3">3</option>
			</select>

			<button type="submit">POST</button>
		</form>
	</body>
</html>
Powered by Gitea Version: 1.19.3 Page: 83ms Template: 8ms Licenses Boodle