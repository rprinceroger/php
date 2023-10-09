<?php

	//[Comments]
	//Comments are parts of the code that gets ignored by the language
	//Comments are meant to describe the written code
	/*
		There are two types of comments:
		- single-line comment - // (two forward slashes)
		- multi-line comment - slash and asterisk
	*/

	//[Variables]
	//Variables in PHP are defined using dollar ($) notation before the name of the variable

	$name = 'Sara D. Chucky';
	$email = 'sarachucky@gmail.com';

	//[Constants]
	//Constants are defined using the define() function
		//naming conventions for "constant" variables should be in ALL CAPS
		//It doesn't use the $ notation before the variable name

	define('PI',3.1416);

	// Variable vs Constant
		// Constants do not follow any variable scoping rules, and they can be defined and accessed anywhere.
		// Variables can be declared anywhere in the program, but they follow variable scoping rules.

	//[Data Types]

	//Strings
	$state = 'New York';
	$country = 'United States of America';
	$address = $state.','.$country; //Concatenation via . sign
	$address = "$state, $country"; //Concatenation via double quotes

	//Integers
	$age = 28;
	$headcount = 15;

	//Floats
	$grade = 98.2;
	$distanceInKilometers = 1662.13;

	//Boolean
	$hasTravelledAbroad = false;
	$haveSymptoms = true;

	//Arrays
	//array() function is used to create an array in PHP
		//'[]' will also work in creating arrays
	$grades = array(98.7,92.1,90.2,94.6);
	$pokemon = ["Bulbasaur","Charmander","Squirtle"];

	//Null
	$spouse = null;
	$middleName = null;

	//Objects
	//Objects in PHP are used to model more complex data structures and encapsulate data and behavopr together
	//fat arrow (=>) is used to assign key value pairs

	$gradesObj = (object)[

		'firstGrading' => 98.7,
		'secondGrading' => 92.1,
		'thirdGrading' => 90.2,
		'fourthGrading' => 94.6
	];

	$personObj = (object)[

		'fullName' => 'Peter Parker',
		'job' => 'Web Developer',
		'isMarried' => false,
		'age' => 35,
		'address' => (object)[

			'state' => 'New York',
			'country' => 'United States of America'
		]
	];


	//code.php

	//[Operators]

	//Assignment operators
			//these are used to assign values to variables
	$x = 1342.14;
	$y = 1265.56;

	$isLegalAge = true;
	$isRegistered = false;

	//[Functions]
	//Functions are used to make reusable code

	function getFullName($firstName, $middleInitial, $lastName){
		return "$lastName, $firstName $middleInitial";
	}


	//[Selection Control Structures]
	//selection control structures are used to make code execution dynamic according to predefined conditions

	//If-Elseif-Else Statement

	function determineTyphoonIntensity($windSpeed){

		if($windSpeed <30){
			return 'Not a typhoon yet';
		} else if($windSpeed <= 61){
			return 'Tropical depression detected.';
		} else if($windSpeed >= 62 && $windSpeed <= 88){
			return 'Tropical storm detected.';
		} else if($windSpeed >= 89 && $windSpeed <= 117){
			return 'Sever tropical storm detected.';
		} else{
			return 'Typhoon detected.';
		}
	}


	//Conditional (Ternary) Operator

	function isUnderAge($age){
		return ($age<18) ? true : false;
	}

	//Switch Statement

	function determineComputerUser($computerNumber){

		switch($computerNumber){
			case 1:
				return 'Peter Parker';
				break;
			case 2:
				return 'Charles Xavier';
				break;
			case 3:
				return 'Norman Bates';
				break;
			case 4:
				return 'Taylor Swift';
				break;
			case 5:
				return 'Ash Ketchum';
				break;
			default:
				return $computerNumber.'is out of bounds!!!';
				break;
		}

	}

	//Try-Catch-Finally Statement

	function greeting($str){
		try{

			if(gettype($str) === "string"){
				echo $str;
			}else{
				throw new Exception("Oops!");
			}
		}
		catch(Exception $e){
			echo $e->getMessage();
		}
		finally{
			echo " I did it again!";
		}
	}
?>
