<?php
function countVowels($str) {
    $str = strtolower($str);
    
    $vowelCount = 0;
    
    $vowels = array('a', 'e', 'i', 'o', 'u');
    
    for ($i = 0; $i < strlen($str); $i++) {
        if (in_array($str[$i], $vowels)) {
            $vowelCount++; 
        }
    }
    
    return $vowelCount;
}

// Example usage
$string = "Nice Looks"; 
$result = countVowels($string);
echo "The number of vowels in '$string' is: " . $result;
?>
