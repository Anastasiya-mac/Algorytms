<?php

function interpolationSearch($myArray, $num)
{
    $count = 1;
    $start = 0;
    $end = count($myArray) - 1;
    $n = 0;

    while (($start <= $end) && ($num >= $myArray[$start]) && ($num <= $myArray[$end])) {
        $n++;
        $base = floor( $start +
            ($end - $start) / ($myArray[$end] - $myArray[$start])
            * ($num - $myArray[$start])
        );


        if ($myArray[$base] == $num) {
            echo "Шаги для интерполяционного" . $count . "<br>\n";
            return $base;
        } elseif ($myArray[$base] < $num) {
            $start = $base + 1;
        } else {
            $end = $base - 1;
        }

        $count++;
    }
    return null;

}