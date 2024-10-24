<?php

function isPalindrome($num) {
   
    $numStr = strval($num);
    
    
    $reversedStr = strrev($numStr);
    
    
    if ($numStr === $reversedStr) {
        return "$num is a palindrome.";
    } else {
        return "$num is not a palindrome.";
    }
}


$number = 865; 
$result = isPalindrome($number);
echo $result;
?>
