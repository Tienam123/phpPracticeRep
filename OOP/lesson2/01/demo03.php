<?php

namespace lesson2\example1\demo03;

class Student
{
    public static $val;
    private $firstName;
    private $lastName;


    public function __construct($firstName, $lastName)
    {

        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        static $a = 5;
    }

    public function getFullName()
    {
        return $this->lastName.' '.$this->firstName;
    }
}

$student      = new Student('Vladyslav', 'Honchar', '25-10-1990');
Student::$val = 15;
echo Student::$val.PHP_EOL;
var_dump($student);