<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>PHP Activity</title>
</head>
<body>
    <?php
    require_once 'code.php';

    $country = "United States";
    $city = "New York";
    $province = "NY";
    $specificAddress = "123 Main St, Apt 4B";

    $fullAddress = getFullAddress($country, $city, $province, $specificAddress);

    echo "<p>Full Address: $fullAddress</p>";


    $numericalGrade = 88;
    $letterGrade = getLetterGrade($numericalGrade);
    echo "<p>Numerical Grade: $numericalGrade</p>";
    echo "<p>Letter Grade: $letterGrade</p>";

    ?>
</body>
</html>