<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Activty2: Access Modifiers and Encapsulation</title>
</head>
<body>
	<?php
		// Display information in the browser
		echo "<h2>Display Information</h2>";
		echo "<h3>Person Information</h3>";
		echo "Name: " . $person->getName() . "<br>";
		echo "Age: " . $person->getAge() . "<br>";
		echo "Address: " . $person->getAddress() . "<br>";

		echo "<h3>Student Information</h3>";
		echo "Name: " . $student->getName() . "<br>";
		echo "Age: " . $student->getAge() . "<br>";
		echo "Student ID: " . $student->getStudentId() . "<br>";
		echo "Address: " . $student->getAddress() . "<br>";

		echo "<h3>Employee Information</h3>";
		echo "Name: " . $employee->getName() . "<br>";
		echo "Age: " . $employee->getAge() . "<br>";
		echo "Team: " . $employee->getTeam() . "<br>";
		echo "Role: " . $employee->getRole() . "<br>";
		echo "Address: " . $employee->getAddress() . "<br>";
	?>

</body>
</html>