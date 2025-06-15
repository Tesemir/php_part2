<?php

namespace lesson8\App;

class Bicycle extends Vehicle
{

    public function start() {
        print_r("Bicycle started movement\n");
    }
    public function stop() {
        print_r("Bicycle stopped\n");
    }
}