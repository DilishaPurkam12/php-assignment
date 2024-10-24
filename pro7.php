<?php
function reverseNumber($num) {
    $numStr = strval($num);
    
    $reversedStr = strrev($numStr);
    
    
    $reversedNum = intval($reversedStr);
    
    return $reversedNum;
}
$number = 6789; // Change this number to test different inputs
$result = reverseNumber($number);
echo "The reverse of $number is: " . $result;
?>
