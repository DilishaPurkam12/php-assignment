<?php
function sumArray($arr) {
    $sum = 0; 
    foreach ($arr as $value) {
        $sum += $value; 
    }
    return $sum;
}
$numbers = array(10, 20, 30, 40, 50); 
$result = sumArray($numbers);
echo "The sum of the array is: " . $result;
?>
