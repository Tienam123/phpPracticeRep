<?php

class Car
{
    public $brand;
    public $color;
    public $maxSpeed;
    public $currentSpeed;

    const MAX_LIFTING_CAPASITY = 630;
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
       self::$_counterOfCars--;
    }

    public static function getCarWithRandomMaxSpeed() {
        return new Car('Honda','Green',rand(200,300));
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