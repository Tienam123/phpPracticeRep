<?php

class Employee
{
    public $name;
    public $age;
    public $salary;
}

$john = new Employee();
$john->name = 'John';
$john->age = 25;
$john->salary = 1000;

$eric = new Employee();
$eric->name = 'Eric';
$eric->age = 26;
$eric->salary = 2000;

var_dump($john->salary+$eric->salary);
var_dump($john->age+$eric->age);