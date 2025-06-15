<?php

namespace lesson6\App;

class Car
{
    public $brand;
    private $model;
    protected $year;

    public function __construct($brand, $model, $year) {
        $this->brand = $brand;
        $this->model = $model;
        $this->year = $year;
    }
}