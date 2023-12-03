<?php

namespace demo02;

class Student
{
    public string $firstName;
    public string $lastName;
    public string $birthDate;

    public function __construct($name, $surname)
    {
        $this->firstName = $name;
        $this->lastName = $surname;
    }

    function getFullName(): string
    {
        return $this->lastName.' '.$this->firstName;
    }
}

$student = [
    new Student('Vladyslav', 'Honhar'),
    new Student('Elena', 'Varlamova'),
    new Student('Lilith', 'Bayadyan'),
];
$student[0]->birthDate = '12-01-2002';
var_dump($student);
var_dump('124');