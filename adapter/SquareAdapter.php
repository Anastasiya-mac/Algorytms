<?php

namespace adapter;

use adapter\interfaces\ISquare;

class SquareAdapter implements ISquare
{
    private $square;
 
    public function __construct()
    {
        $this->square = new SquareAreaLib();
    }
 
    public function squareArea(int $diagonal): void
    {
        echo "квадрат " . $this->square->getSquareArea($diagonal) . " ";
    }
}
