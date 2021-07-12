<?php

namespace adapter;

use adapter\CircleAdapter; 

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^adapter/', '', $className);
    require_once __DIR__ . $className . '.php';
});

$circleAdapter = (new CircleAdapter())->circleArea(5);
$squareAdapter = (new SquareAdapter())->squareArea(5);
