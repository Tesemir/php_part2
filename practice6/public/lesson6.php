<?php

use lesson6\App\Car;

require __DIR__ . '/../../vendor/autoload.php';

$car = new Car("Chevrolet", "Camaro", 2017);

$car->brand = "Hyundai";
$car->model = "Tucson";
$car->year = 2000;