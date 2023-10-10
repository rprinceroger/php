<?php
function performArrayManipulation() {

    $students = [];

    array_push($students, "Uzumaki Naruto");

    array_push($students, "Minato Namikaze");

    array_shift($students);

    return $students;
}

function printStudentsAndCount($students) {
    echo "Array: ";
    echo '<pre>' . print_r($students, true) . '</pre>';
    echo "Count: " . count($students) . "<br><br>";
}
?>
