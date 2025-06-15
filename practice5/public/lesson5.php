<?php

use lesson5\App\Rectangle;
use lesson5\App\Circle;

require __DIR__ . '\..\..\vendor\autoload.php';

$circle = new Circle("Circle", 20);
$rectangle = new Rectangle("Rectangle", 20, 20);

print($circle->calcArea());
print($rectangle->calcArea());