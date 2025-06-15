<?php

use lesson8\App\Car;
use lesson8\App\Bicycle;

require __DIR__ . '/../../vendor/autoload.php';

$car = new Car();
$bicycle = new Bicycle();

$car->start();
$bicycle->start();

$car->stop();
$bicycle->stop();