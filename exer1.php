<?php

class Car implements Runnable
{
    protected $engine = null;
    protected $wheel = null;

    public function __construct(Engine $engine, Wheel $wheel) {
        $this->engine = $engine;
        $this->wheel = $wheel;
    }

    public function getEngine() {
        return $this->engine;
    }

    public function getWheel() {
        return $this->wheel;
    }

    public function setEngine(Engine $engine) {
        $this->engine = $engine;
    }

    public function setWheel(Wheel $wheel) {
        $this->wheel = $wheel;
    }

    public function run() {
        echo "Car: <br>";
        echo "- Engine type: " . $this->engine->getType() . "<br>";
        echo "- Wheel type: " . $this->wheel->getType() . "<br>";
        echo "Status: running...";
    }

}

interface Runnable {
    public function run();
}

interface Engine {
    
}

interface Wheel {

}

class ProEngine implements Engine
{
    protected $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }
}

class ProWheel implements Wheel
{
    protected $type;

    public function __construct($type) {
        $this->type = $type;
    }

    public function getType() {
        return $this->type;
    }

    public function setType($type) {
        $this->type = $type;
    }
}

$engine = new Engine('promax');
$wheel = new Wheel('promax');
$car = new Car($engine, $wheel);

$car->run();