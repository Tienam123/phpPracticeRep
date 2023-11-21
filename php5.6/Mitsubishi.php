<?php

class Mitsubishi extends Car
{
    public $sign = 'M';
    public function __construct($color='black',$maxSpeed= 500)
    {
        parent::__construct('Mitsubishi',$color,$maxSpeed);
    }

    public function setColor($color)
    {
        if ($this->currentSpeed == 0) {
            $this->color = $color.' '.$this->sign;
        }
    }

    public function getColor() {
        return 'Это цвет значка'.$this->color;
    }


}