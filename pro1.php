<?php

function checkEvenOdd($number) {
    if ($number % 2 == 0) {
        return "$number is Even.";
    } else {
        return "$number is Odd.";
    }
}
$number = 75; 
$result = checkEvenOdd($number);
echo $result;
?>
