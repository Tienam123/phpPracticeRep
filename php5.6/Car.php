<?php

class Car
{
    public $brand;
    public $color;
    public $maxSpeed;
    public $currentSpeed;

    public static $_counterOfCars = 0;

    public function __construct($brand, $color, $maxSpeed)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
        self::$_counterOfCars++;
    }

    public function __destruct()
    {
        $this->stop();
    }

    public function move($speed)
    {
        $this->currentSpeed = $speed;
    }

    public function stop()
    {
        $this->currentSpeed = 0;
    }

}