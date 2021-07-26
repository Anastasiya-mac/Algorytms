<?php 

include 'BinarySearch.php';
include 'LinearSearch.php';
include 'InterpolationSearch.php';

function deleteVarFromArr($myArray, $var)
{
    sort($myArray);

    echo "Старый массив <br> \n";
    printArr($myArray);
    echo "<br>\n";
    
    $deleteVar = binarySearch($myArray, $var);
    $deleteVar2 = linearSearch($myArray, $var);
    $deleteVar3 = interpolationSearch($myArray, $var);
    echo "<br>\n Удалим из массива элемент " . $var . "<br>\n";
    unset($myArray[$deleteVar]);

    echo "Новый массив <br> \n";
    printArr($myArray);
}

function printArr($myArray)
{
    foreach($myArray as $value){
        echo $value . " ";
    }
}