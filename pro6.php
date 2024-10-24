<?php

function isPalindrome($str) {
    $cleanStr = strtolower(str_replace(' ', '', $str));
    $reversedStr = strrev($cleanStr);
    if ($cleanStr === $reversedStr) {
        return "$str is a palindrome.";
    } else {
        return "$str is not a palindrome.";
    }
}
$string = "Heaven"; 
$result = isPalindrome($string);
echo $result;
?>
