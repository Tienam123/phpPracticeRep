<?php

class User
{
    private $name;
    protected $age;

    public function getName()
    {
        return $this->name;
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

    public function setName($name)
    {
        $this->name = $name;
    }
}