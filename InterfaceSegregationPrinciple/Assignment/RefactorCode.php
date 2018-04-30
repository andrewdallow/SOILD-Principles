<?php

interface iDrawable2D
{
    // 2-Dimensional Methods
    public function calculateArea();
}

interface iDrawable1D
{
    // 1-Dimensional methods...
    public function getLength(): float;
}

class Rectangle implements iDrawable2D
{
    public $width;
    public $height;

    /**
     * Calculate area of shape
     *
     * @return float
     */
    public function calculateArea()
    {
        //Implement calculateArea() method.
    }
}

class Line implements iDrawable1D
{
    public $width;

    public function getLength(): float
    {
        return $this->width;
    }
}