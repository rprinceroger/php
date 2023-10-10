<?php 

	//[Repetition Control Structures]
		//Repetition control structures are used to execute code multiple times.

	//While Loop
		//a while loop takes a single condition
		//if the condition evaluates to true, the code inside the block will run
	
	function whileloop(){

		$count = 5;

		while($count !== 0){
			echo $count. '<br/>';
			$count--;
		}
	};

	//Do-while Loop
		//a do-while loop works a lot like the while loop, but unlike while loops, do-while loops guarantee that code will be executed at least once

	function doWhileLoop(){
		$count = 20;

		do {
			echo $count. '<br/>';
			$count--;
		}while ($count > 0);
	};

	//For Loop
	/*
		A for loop is more flexible than while and do-while loops. It consists of three parts: 
		- The initial value that will track the progression of the loop;
		- The condition that will be evaluated and will determine whether the loop will run one more time; and,
		- The iteration that indicates how to advnace the loop
	*/

	function forLoop(){
		for($count = 0; $count <= 20; $count++){
			echo $count. '<br/>';
		}
	};

	/*
		Continue is a keyword that allows the code to go to the next loop without finishing the current code block
		Break on the other hand is a keyword that ends the execution of the current loop.
	*/

	function modifiedForLoop(){
	    for($count = 0; $count <= 20; $count++){
	        // Check if $count is even
	        if($count % 2 === 0) {
	            // Skip even numbers
	            continue;
	        }
	        
	        echo $count . '<br/>';
	        
	        // Check if $count is greater than 10
	        if ($count > 10){
	            // Exit the loop if $count is greater than 10
	            break;
	        }
	    }
	}

	//[Array]
	//An array is a kind of variable that can hold more than one value
	//Arrays are declared using array() function or square brackets '[]'

	$onePiece = ['Luffy', 'Sanji', 'Nami', 'Condoriano', 'Bege', 'Roger'];
	$pokemon = ['Ghastly', 'Eevee', 'Vulpix', 'Flygon', 'Diglett'];
	$studentNumbers = array('2023-1923', '2023-1924', '2023-1925', '2023-1926', '2023-1927'); //before PHP5.4
	$studentNumbers = ['2023-1923', '2023-1924', '2023-1925', '2023-1926', '2023-1927']; //introduced on PHP5.4


	//there are three different kinds of arrays and each array value is accessed using an ID which is called on array index

	//Simple Array (on Numeric Array)
	$grades = [98.5, 94.3, 89.2, 90.1];
	$computerBrands = ['Acer', 'Asus', 'Neo', 'Redfox', 'Gateway', 'Toshiba', 'Fujitsu'];
	$tasks = [
	    'drink html',
	    'eat javascript',
	    'inhale css',
	    'bake php'
	];


	//Associative Array
		//Associative array is an array with string as index where it stores element values in association with key values rather than in a strict linear index order
	/*
		"=>" is referred to as the double arrow operator.
				- It is an assignment operator used in the creation of associative arrays.
				- It is placed in between the array key and its value.
	*/

	$gradePeriods = ['firstGrading' => 98.5, 'secondGrading' => 94.3, 'thirdGrading' => 89.2,'fourthGrading' => 90.1];

	//Two-Dimensional Simple Array
	$heroes = [
		['iron man','thor','hulk'],
		['wolverine','cyclops','jean grey'],
		['batman','superman','wonder woman'],
	];

	//Two-Dimensional Associative Array
	$ironManPowers = [
		'regular' => ['repulsor blast','rocket punch'],
		'signature' => ['unibeam']
	];


	//Array Functions or methods
	//PHP arrays are essential for storing, managing, and operating on sets of variables

	//Array Mutations

	//Sorting Arrays

	$sortedBrands = $computerBrands;
	$reverseSortedBrands = $computerBrands;

	sort($sortedBrands);
	rsort($reverseSortedBrands);

	//Other Array Functions
	//in_array()

	function searchBrand($brands, $brand){
		return (in_array($brand, $brands)) ? "$brand is in the array!!!" : "$brand is not the array!";
	}

	//array_reverse()

	array_reverse($computerBrands);
	$reverseComputerBrands = array_reverse($computerBrands);



?>