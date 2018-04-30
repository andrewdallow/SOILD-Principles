<?php

namespace Liskov;
require_once 'Rectangle.php';

class Square extends Rectangle
{
    public function setWidth(int $width): void
    {
        $this->_width = $width;
        $this->_height = $width;
    }

    public function setHeight(int $height): void
    {
        $this->_width = $height;
        $this->_height = $height;
    }
}