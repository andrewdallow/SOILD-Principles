<?php

class Rectangle implements Shape
{
    private $width;
    private $height;

    /**
     * Calculate the area of the rectangle.
     *
     * @return float
     */
    public function area(): float
    {
        return $this->width * $this->height;
    }
}