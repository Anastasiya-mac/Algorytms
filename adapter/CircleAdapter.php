<?php

namespace adapter;

use adapter\interfaces\ICircle;

class CircleAdapter implements ICircle
{
    private $circle;
 
    public function __construct()
    {
        $this->circle = new CircleAreaLib();
    }
 
    public function circleArea(int $circumference): void
    {
        $diagonal = $circumference / M_PI;
        echo "круг " . $this->circle->getCircleArea($diagonal) . " ";
    }
}
