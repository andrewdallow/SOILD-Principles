<?php

namespace Liskov;

require_once 'Rectangle.php';
require_once 'Square.php';

class LspTest
{
    private function getRectangle(): Rectangle
    {
        return new Square();
    }

    public function main(): void
    {
        // Function assumes an object of type Rectangle but gets Square with
        // different functionality
        $rectangle = $this->getRectangle();
        $rectangle->setWidth(5);
        $rectangle->setHeight(10);
        $area = $rectangle->getArea();
        // Expect area to be 5 * 10, but is 10 * 10 due to Square's unexpected
        // behaviour.
        echo $area;


    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>LSP Test</title>
</head>
<body>
<h1>Liskov Substitution Principle Test</h1>
<p>Expect 5 * 10 = 50 but got: </p>
<p>
    <?php
    $lspTest = new LspTest();
    $lspTest->main();
    ?>
</p>
</body>
</html>
