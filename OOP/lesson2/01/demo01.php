<?php

namespace lesson2\example1\demo01;

class Student
{
    var $firstName;
    var $lastName;
    var $birthDate;

    function getFullName()
    {
        return $this->lastName.' '.$this->firstName;
    }
}

$student            = new Student();
$student->firstName = 'Vasya';
$student->lastName  = 'Pipkin';
echo $student->getFullName().PHP_EOL;