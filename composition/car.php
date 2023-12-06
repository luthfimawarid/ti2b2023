<?php

include_once "engine.php";

class Car {
    private $engine;

    public function __construct() {
        $this->engine = new Engine();
    }

    public function startCar() {
        $this->engine->start();
        echo "Car started<br>";
    }
}
