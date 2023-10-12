<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Access Modifiers and Encapsulation</title>
</head>
<body>

	<h1>Access Modifiers</h1>
	<p>
		<em>Access Modifiers specify the scope of class properties or methods and how they can be accessed.</em>
	</p>

	<h2>Building Object</h2>
	<p>
		<!-- echo the printName invocation here -->
		<?php echo $building->printName(); ?>

	</p>
	<pre><?php var_dump($building); ?></pre>

	<h2>Condominium Object</h2>
	<p>
		<?php echo $condominium->printName(); ?>
	</p>
	<pre><?php var_dump($condominium); ?></pre>

	<h2>Building Variable</h2>
	<p>
		<?php echo $building->getName(); ?>
	</p>

	<h2>Condominium Variable</h2>
	<p>
		<?php echo $condominium->getName(); ?>
	</p>

	<h1>Encapsolation</h1>
	<p>The name of the condominium is <?php echo $condominium->getName(); ?>.</p>
	<p>The <?php echo $condominium->getName() ?> is <?php echo $condominium->getFloors(); ?> stories high.</p>

	<?php echo $condominium->setName('Enzo Tower'); ?>
	<?php //echo $condominium->setFloors(10); ?>

	<p>The name of the condominium has been changed to <?php echo $condominium->getName(); ?> and the floors of the condominium has been changed to <?php echo $condominium->getFloors(); ?>.</p>



</body>
</html>