<?php
function getFullAddress($country, $city, $province, $specificAddress) {
    $fullAddress = $specificAddress . ', ' . $province . ', ' . $city . ', ' . $country;
    return $fullAddress;
}


function getLetterGrade($numericalGrade) {
    if ($numericalGrade >= 98 && $numericalGrade <= 100) {
        return "A+";
    } elseif ($numericalGrade >= 95 && $numericalGrade <= 97) {
        return "A";
    } elseif ($numericalGrade >= 92 && $numericalGrade <= 94) {
        return "A-";
    } elseif ($numericalGrade >= 89 && $numericalGrade <= 91) {
        return "B+";
    } elseif ($numericalGrade >= 86 && $numericalGrade <= 88) {
        return "B";
    } elseif ($numericalGrade >= 83 && $numericalGrade <= 85) {
        return "B-";
    } elseif ($numericalGrade >= 80 && $numericalGrade <= 82) {
        return "C+";
    } elseif ($numericalGrade >= 77 && $numericalGrade <= 79) {
        return "C";
    } elseif ($numericalGrade >= 75 && $numericalGrade <= 76) {
        return "C-";
    } else {
        return "D";
    }
}


?>







