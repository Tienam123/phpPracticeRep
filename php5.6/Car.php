<?php

class Car
{
    private $brand;
    protected $color;
    private $maxSpeed;
    protected $currentSpeed = 0;

    public function __construct($brand, $color = 'black', $maxSpeed = 500)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->maxSpeed = $maxSpeed;
    }

    public function move($speed)
    {
        $this->setSpeed($speed);
    }

    public function stop()
    {
        $this->setSpeed(0);
    }

    protected function setSpeed($speed)
    {
        $this->setSpeed($speed);
    }

    public function setColor($color)
    {
        if ($this->currentSpeed == 0) {
            $this->color = $color;
        }
    }

    public function getColor() {
        return $this->color;
    }
    public function __get(string $name)
    {
     return $this->$name;
    }
    public function __set(string $name, $value)
    {
     return $this->$value = $name;
    }

}