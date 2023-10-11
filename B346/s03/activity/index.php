<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Activity: PHP Classes and Objects</title>
</head>
<body>
    <?php
    $person = new Person('Senku', '', 'Ishigami');
    $developer = new Developer('John', 'Finch', 'Smith');
    $engineer = new Engineer('Harold', 'Myers', 'Reese');
    ?>

    <h2>Print Name Methods:</h2>
    <h4>Person: </h4>
    <p><?= $person->printName() ?></p>
    <h4>Developer: </h4>
    <p><?= $developer->printName() ?></p>
    <h4>Engineer: </h4>
    <p><?= $engineer->printName() ?></p>

</body>
</html>