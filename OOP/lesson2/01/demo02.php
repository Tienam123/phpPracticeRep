<?php

namespace lesson2\example1\demo02;

use http\Exception\InvalidArgumentException;

class Student
{
    private $firstName;
    private $lastName;
    private $birthDate;


    public function __construct($firstName, $lastName, $birthDate)
    {
        if (empty($firstName) || empty($lastName) || empty($birthDate)) {
            throw new InvalidArgumentException('Неккоректные данные');
        } else {
            $this->firstName = $firstName;
            $this->lastName  = $lastName;
            $this->birthDate = $birthDate;
        }
    }

    public function rename($firstName, $lastName)
    {
        if (empty($firstName) || empty($lastName)) {
            throw new InvalidArgumentException('Неккоректные данные');
        }
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
    }

    public function getLastName()
    {
        return $this->lastName;
    }

    public function getFirstName()
    {
        return $this->firstName;
    }

    public function getFullName()
    {
        return $this->lastName.' '.$this->firstName;
    }
}

$student = new Student('Vladyslav', 'Honchar', '25-10-1990');

echo $student->getFullName().PHP_EOL;