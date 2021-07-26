<?php

function linearSearch($myArray, $num) {

    $count = 1;
    $arrCount = count($myArray);

    for ($i = 0; $i < $arrCount; $i++) {

        if($myArray[$i] == $num) {
            echo "Шаги для линейного " . $count . "<br>\n";
            return $i;
        }

        elseif ($myArray[$i] > $num) {
            echo "Шаги для линейного " . $count . "<br>\n";
            return null;
        }

        $count++;
    }
}