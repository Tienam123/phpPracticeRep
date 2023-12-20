<?php

namespace lesson1\example27;


class Employee
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

class Student
{
    public $name;
    public $scholarship;

    public function __construct($name, $scholarship)
    {
        $this->name = $name;
        $this->scholarship = $scholarship;
    }

    public function getName()
    {
        return $this->name;
    }

    public function getScholarship()
    {
        return $this->scholarship;
    }
}
class UserCollections
{
    private $empoyees = [];
    private $students = [];

    public function add($user)
    {
        if ($user instanceof Employee) {
            $this->empoyees[] = $user;
        }

        if ($user instanceof Student) {
            $this->students[] = $user;
        }
    }

    public function getTotalSalary()
    {
        $total = 0;
        foreach ($this->empoyees as $empoyee) {
            $total += $empoyee->getSalary();
        }
        return $total;
    }

    public function getTotalScholarship()
    {
        $total = 0;
        foreach ($this->students as $student) {
            $total += $student->getScholarship();
        }
        return $total;
    }

    public function getTotalPayment()
    {
        return $this->getTotalSalary() + $this->getTotalScholarship();
    }
}

$userCollections = new UserCollections;
$userCollections->add(new Employee('Vasya',5000));
$userCollections->add(new Student('Byden',3000 ));
$userCollections->add(new Employee('Putin',10000));
$userCollections->add(new Student('Zelensky',0.01));
var_dump($userCollections->getTotalSalary());
var_dump($userCollections->getTotalScholarship());
var_dump($userCollections->getTotalPayment());
var_dump($userCollections);