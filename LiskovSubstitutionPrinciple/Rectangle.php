<?php

namespace Liskov;

class Rectangle
{
    protected $_width;
    protected $_height;

    public function setWidth(int $width): void
    {
        $this->_width = $width;
    }

    public function setHeight(int $height): void
    {
        $this->_height = $height;
    }

    public function getArea()
    {
        return $this->_width * $this->_height;
    }
}