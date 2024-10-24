<?php
function findLargest($num1, $num2, $num3) {
    if ($num1 >= $num2 && $num1 >= $num3) {
        return "$num1 is the largest.";
    } elseif ($num2 >= $num1 && $num2 >= $num3) {
        return "$num2 is the largest.";
    } else {
        return "$num3 is the largest.";
    }
}
$num1 = 45;
$num2 = 20;
$num3 = 15;

$result = findLargest($num1, $num2, $num3);
echo $result;
?>
