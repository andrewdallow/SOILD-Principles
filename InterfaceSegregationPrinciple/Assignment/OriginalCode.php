<?php

interface iDrawable
{

    public function calculateArea();

}

class Rectangle implements iDrawable
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

class Line implements iDrawable
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