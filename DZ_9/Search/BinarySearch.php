<?php

function binarySearch($myArray, $num) {

    $count = 1;
    $left = 0;
    $right = count($myArray) - 1;
    
    while ($left <= $right) {
        $middle = floor(($right + $left)/2); 
        
        if ($myArray[$middle] == $num) {
            echo "Шаги для бинарного " . $count . "<br>\n";
            return $middle;
        }
    
        elseif ($myArray[$middle] > $num) {
            $right = $middle - 1;
        }
        elseif ($myArray[$middle] < $num) {
            $left = $middle + 1;
        }
        $count++;
    }

    return null;
}
    
