<?php
/**
 * Short description for file
 *
 * Long description for file (if any)...
 *
 * LICENSE: Some license information
 *
 * @category   Zend
 * @package    Zend_AreaCalculator.php
 * @subpackage
 * @copyright  Copyright (c) 2018 ecommistry (http://ecommistry.com)
 * @license    http://framework.zend.com/license   BSD License
 * @version    [version]
 * @link       http://framework.zend.com/package/PackageName
 * @since      File available since Release [version]
 */

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
