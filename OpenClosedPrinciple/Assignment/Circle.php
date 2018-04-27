<?php

class Circle implements Shape
{
    private $radius;

    /**
     * Calculate area of the circle.
     *
     * @return float
     */
    public function area(): float
    {
        return $this->radius * $this->radius * pi();
    }
}