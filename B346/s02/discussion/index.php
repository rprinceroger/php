<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Repetition Control Structures and Array Manipulation</title>
</head>
<body>
	<h1>Repetition Control Structures</h1>

	<h2>While Loop</h2>
	<?php whileLoop(); ?>
	<h2>Do-While Loop</h2>
	<?php doWhileLoop(); ?>
	<h2>For Loop</h2>
	<?php forLoop(); ?>

	<h2>Continue and Break</h2>
	<?php modifiedForLoop(); ?>			

	<h1>Array</h1>
	<h2>Student Array: <?php print_r($studentNumbers); ?></h2>
	<h2>One Piece Array: <?php print_r($onePiece); ?></h2>

	<h2>Simple Array</h2>

	<!-- 
		Syntax:

		foreach (iterable_expression as $value){
			//statement/code block to execute each value
		}

		- for each loop iterates over each element in the "iterable_expression" and assigns teh current element's value to the variable "$value"
	 -->

	 <ul>
	 	<?php foreach($computerBrands as $brand) {?>
	 		<li><?= $brand ?></li>
	 	<?php } ?>
	 </ul>
	 	
	<h2>Associative Array</h2>

	<!-- 
		Syntax: 

		foreach (iterable_expression as $key => $value){
			//statement/code block to execute for each key and value
		}
		- for each loop doesn't only assign the current element's value to variable $value but also assigns the current element's key (index) to the variable $key
	 -->

	 <ul>
	 	<?php foreach($gradePeriods as $period => $grade) {?>
	 		<li><?= $brand ?></li>
	 	<?php } ?>
	 </ul>


	 <h2>Multidimensional Array</h2>
	 <ul>
	 	<?php 
	 		foreach($heroes as $team){
	 			foreach($team as $member){
	 			?>
	 				<li><?= $member ?> </li>
	 			<?php	
	 			}
	 		}
	 	?>
	 </ul>

	 <h2>Multidimentional Associative Array</h2>

	 <ul>
	 	<?php  
	 		foreach($ironManPowers as $label => $powerGroup){
	 			foreach($powerGroup as $power){
	 				?>
	 					<li><?php echo "$label: $power" ?></li>
	 				<?php	
	 			}
	 		}
	 	?>
	 </ul>

	 <h2>Array Functions</h2>

	 <h3>Original Array</h3>
	 <pre><?php var_dump($computerBrands)?></pre>
	 <pre><?php print_r($computerBrands)?></pre>

	 <h3>Append</h3>
	 <h4>Add one or more element on the end of an array.</h4>

	 <p>Array length after array_push(): <?php echo array_push($computerBrands,'Apple' );?></p>
	 <pre><?php print_r($computerBrands); ?></pre>

	 <h4>Add one or more element on the start of an array.</h4>

	 <p>Array length after array_unshift(): <?php echo array_unshift($computerBrands,'Dell' );?></p>
	 <pre><?php print_r($computerBrands); ?></pre>

	 <h3>Remove</h3>
	 <h4>Remove the element in the end of an array.</h4>
	 <p>Removed item after array_pop(): <?= array_pop($computerBrands); ?></p>
	 <pre><?php print_r($computerBrands); ?></pre>

	 <h4>Remove the element in the start of an array.</h4>
	 <p>Removed item after array_shift(): <?= array_shift($computerBrands);?></p>
	 <pre><?php print_r($computerBrands); ?></pre>

	 <h3>Sort in Ascending Order</h3>
	 <pre><?php print_r($sortedBrands); ?></pre>

	 <h3>Sort in Descending Order</h3>
	 <pre><?php print_r($reverseSortedBrands); ?></pre>

	 <h3>Other Array Functions</h3>


	 <h4>Count</h4>
	 <pre>Total length of $computerBrands: <?php echo count($computerBrands); ?></pre>

	 <h4>In Array</h4>
	 <p><?php echo searchBrand($computerBrands, 'HP'); ?></p>
	 <p><?php echo searchBrand($computerBrands, 'Acer'); ?></p>


	 <h4>Reverse Order(not sorting)</h4>
	 <pre><?php print_r($computerBrands); ?></pre>
	 <pre><?php print_r($reverseComputerBrands); ?></pre>

		 
</body>
</html>


