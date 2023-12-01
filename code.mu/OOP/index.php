<?php

class User
{
    public $name;
    public $age;
    public $salary;


    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($age >= 18) {
            $this->age = $age;
        }

    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    public function doubleSalary()
    {
        $this->salary *= 2;
    }

}

$user = new User();
$user->setName('Vladyslav');
$user->setAge(19);
$user->setSalary(5000);
$user->doubleSalary();
var_dump($user);

class Restangle
{
    public $width;
    public $height;
    public function __construct($width,$height)
    {
        $this->width=$width;
        $this->height=$height;
    }

    public function getSquare()
    {
        return $this->height * $this->width;
    }
    public function getPerimeter(){
        return ($this->height + $this->width)*2;
    }
}

$figure = new Restangle(13,23);
var_dump($figure->getSquare());