<?php

namespace lesson1\example28;

class Post
{
    private $name;
    private $salary;

    public function __construct($name, $salary)
    {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getName()
    {
        return $this->name;
    }
    public function getSalary()
    {
        return $this->salary;
    }
}

$developer = new Post('developer', 50000);
$managerDriver = new Post('manager-driver', 10000);

class Employee
{
    private $name;
    private $surname;
    private $post;

    public function __construct($name, $surname, Post $post)
    {
        $this->name = $name;
        $this->surname = $surname;
        $this->post = $post;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getSurname()
    {
        return $this->surname;
    }

    public function getPost()
    {
        return $this->post;
    }
    public function changePost(Post $post)
    {
        $this->post = $post;
    }
}
$VHonchar = new Employee('Vladyslav','Honchar',$developer);
var_dump($VHonchar);
var_dump($VHonchar->getName(). ' ' . $VHonchar->getSurname() . ' ' . ' Зарплата: ' . $VHonchar->getPost()->getSalary());