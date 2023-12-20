<?php

namespace lesson1\example26;

class User
{
    private $name;
    private $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getAge()
    {
        return $this->age;
    }
}
function compare($obj1,$obj2)
{
    if ($obj1===$obj2) {
        return 1;
    } elseif ($obj1==$obj2){
        return 0;
    } else {
        return -1;
    }
}