<?php
namespace lesson1\example2;
class User
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age  = $age;
    }
}

$user = new User('john', 30);

$user2 = $user;
var_dump($user);
var_dump($user2);
$user2->name = 'Eric';

var_dump($user);
var_dump($user2);