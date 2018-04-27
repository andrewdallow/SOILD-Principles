<?php

class AreaCalculator
{
    /**
     * Calculate the total area of an array of shapes.
     *
     * @param array $shapes
     *
     * @return float
     */
    public function calculateTotalArea(array $shapes): float
    {
        $totalArea = 0;
        foreach ($shapes as $shape) {
            $totalArea += $shape->area();
        }
        return $totalArea;
    }

}