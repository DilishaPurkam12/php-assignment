<?php

function findLargest($arr) {
    if (empty($arr)) {
        return "Array is empty."; 
    }

    $largest = $arr[0];
    
    foreach ($arr as $value) {
        if ($value > $largest) {
            $largest = $value; 
        }
    }

    return $largest;
}


$numbers = array(67, 90, 34, 21, 32); // Example array
$result = findLargest($numbers);
echo "The largest element in the array is: " . $result;
?>
