<?php require_once "./code.php"; ?>
<!-- PHP code can be included to another file by using the require_once keyword. -->
<!-- We will use this method to separate the declaration of variables and functions from the HTML content. -->

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Basics and Selection Control Structures</title>
</head>
<body>
	<!-- <h1>Hello World!</h1> -->

	<h1>Echoing Values</h1>
	<!-- Double quotes can easily read variables -->
	<p><?php echo "Good day $name! Your given email is $email.";?></p>

	<!-- variables can be used to output data in double quotes while single quites do not -->
	<p><?php echo 'Good day $name! Your given email is $email.';?></p>

	<!-- Single quotes can be used but concatenation is needed -->
	<!-- dot (.) is used for concatenation in php -->
	<p><?php echo 'Good day, ' .  $name .'!' . ' Your given email is' . $email . '.';?></p>

	<!-- For constant variable, dot(.) is used to display its value -->
	<p><?php echo "The value of PI is " . PI; ?></p>

	<h1>Data Types</h1>

	<!-- Normal echoing of boolean and null variables will not make it visible to the web page -->

	<p>hasTravelledAbroad: <?php echo "$hasTravelledAbroad"; ?></p>
	<p>spouse: <?php echo "$spouse"; ?></p>


	<!-- To see their types instead, we can use gettype() or var_dump() function -->

	<!-- gettype() function -->
	<p>hasTravelledAbroad: <?php echo gettype($hasTravelledAbroad) ?></p>
	<p>spouse: <?php echo gettype($spouse); ?></p>

	<!-- var_dump() function -->
	<p>hasTravelledAbroad: <?php var_dump($hasTravelledAbroad) ?></p>
	<p>spouse: <?php var_dump($spouse); ?></p>

	<!-- gettype() returns the data type of the variable value passed as an argument -->
	<!-- var_dump() displays structured information about variables/expressions including its type and value -->

	<!-- To output the value of an object property, the arrow notation can be used -->
	<p><?php echo $gradesObj->firstGrading; ?></p>
	<p><?php echo $personObj->address->state; ?></p>

	<!-- To output an array element, we can use the usual square brackets -->

	<p><?php echo $grades[3] ?></p>
	<p><?php echo $grades[2] ?></p>

	<!-- If we want to display the whole array and object we can use var_dump() -->

	<p><?php var_dump($gradesObj)?></p>
	<p><?php var_dump($grades)?></p>

	<!-- print_r() function can also be used to print the whole array and object-->
	<p><?php print_r($personObj)?></p>
	<p><?php print_r($grades)?></p>

	<h1>Operators</h1>

	<p>X: <?php echo $x; ?></p>
	<p>X: <?php echo $y; ?></p>

	<p>Is Legal Age: <?php echo var_dump($isLegalAge); ?></p>
	<p>Is Legal Age: <?php echo var_dump($isRegistered); ?></p>

	<h2>Arithmetic Operators</h2>

	<p>Sum: <?php echo $x + $y; ?></p>
	<p>Difference: <?php echo $x - $y; ?></p>
	<p>Product: <?php echo $x * $y; ?></p>
	<p>Quotient: <?php echo $x / $y; ?></p>
	<p>Modulo: <?php echo $x % $y; ?></p>

	<h3>Equality Operators</h3>

	<p>Loose Equality: <?php var_dump($x == '500'); ?></p>
	<p>Strict Equality: <?php var_dump($x === '500'); ?></p>
	<p>Loose Inequality: <?php var_dump($x != '500'); ?></p>
	<p>Strict Inequality: <?php var_dump($x !== '500'); ?></p>

	<h3>Greater/Lesser Operators</h3>
	<p>Is Lesser: <?php var_dump($x < $y);?></p>
	<p>Is Greater: <?php var_dump($x > $y);?></p>

	<h2>Logical Operators</h2>
	<p>Are All Requirements Met: <?php var_dump($isLegalAge && $isRegistered); ?></p>
	<p>Are Some Requirements Met: <?php var_dump($isLegalAge || $isRegistered); ?></p>
	<p>Are Requirements Not Met: <?php var_dump(!$isLegalAge && !$isRegistered); ?></p>

	<h1>Function</h1>
	<p>Full Name: <?php echo getFullName('Monkey',  'D', 'Luffy') ?></p>

	<h1>Selection Control Structures</h1>
	
	<h2>If-Elseif-Else</h2>
	<p><?php echo determineTyphoonIntensity(12); ?></p>

	<h2>Ternary Sample (Is Underage?)</h2>
	<p>78: <?php var_dump(isUnderAge(78)); ?></p>
	<p>17: <?php var_dump(isUnderAge(17)); ?></p>

	<h2>Switch</h2>
	<p><?php echo determineComputerUser(5); ?></p>

	<h2></h2>
	<p><?php greeting("Hi! I am a string!");?></p>
	<p><?php greeting(25);?></p>

</body>
</html>
