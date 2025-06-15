<?php

namespace lesson8\App;

class Car extends Vehicle
{
    public function start() {
        print_r("Car started\n");
    }

    public function stop() {
        print_r("Car stopped\n");
    }
}