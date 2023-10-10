<?php require_once "./code.php"; ?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>PHP Activity: Repetition Control Structures and Array Manipulation</title>
</head>
<body>
    <h1>Array Manipulation</h1>

    <?php
    $students = []; // Create an empty array

    // Add the first student
    array_push($students, "Uzumaki Naruto");
    ?>

    <h3>With our first student:</h3>
    <?php printStudentsAndCount($students); ?>

    <?php
    // Add the new student
    array_push($students, "Minato Namikaze");
    ?>

    <h3>After adding the new student:</h3>
    <?php printStudentsAndCount($students); ?>

    <?php
    // Remove the first student
    array_shift($students);
    ?>

    <h3>After removing the first student:</h3>
    <?php printStudentsAndCount($students); ?>

    <h1>Divisibles of Five:</h1>
    
    <table border="1">
        <tr>
            <th>Number</th>
        </tr>
        <?php
        $count = 0;
        for ($i = 0; $i <= 1000 && $i <= 500; $i += 5) {
            if ($count % 25 == 0) {
                echo "</tr><tr>";
            }
            echo "<td style='border: 1px solid black; padding: 8px; text-align: center;'>$i</td>";
            $count++;
        }
        ?>
    </table>
</body>
</html>
