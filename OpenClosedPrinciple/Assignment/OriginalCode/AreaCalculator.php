<?php

class AreaCalculator
{
    /**
     * Calculate area of array of shapes
     *
     * @param array $shapes
     *
     * @return float
     */
    public function area($shapes)
    {
        $area = 0;
        foreach ($shapes as $shape) {
            if (get_class($shape) == 'Rectangle') {
                $area += $shape->width * $shape->height;
            } else {
                $area += $shape->radius * $shape->radius * pi();
            }
        }

        return $area;
    }
}
