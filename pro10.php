<?php
function countCharacterFrequency($str) {
    $frequency = array();
    
    for ($i = 0; $i < strlen($str); $i++) {
        $char = $str[$i]; 
        
        if (isset($frequency[$char])) {
            $frequency[$char]++;
        } else {
    
            $frequency[$char] = 1;
        }
    }
    
    return $frequency;
}


$string = "Have A good day"; // Change this string to test different inputs
$result = countCharacterFrequency($string);

// Display the frequency of each character
echo "Character frequencies in '$string':<br>";
foreach ($result as $char => $count) {
    echo "'" . $char . "' appears " . $count . " times<br>";
}
?>
