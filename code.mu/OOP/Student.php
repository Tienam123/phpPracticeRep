<?php
require_once "User.php";

class Student extends User
{
    private $course;

    public function getCourse()
    {
        return $this->course;
    }

    public function setCourse($course)
    {
        if ($course >= 1 && $course <= 5) {
            $this->course = $course;
        }
    }

    public function setAge($age)
    {
        if ($age >= 18 && $age <= 25) {
            $this->age = $age;
        }
    }
}

$student = new Student();
var_dump($student);