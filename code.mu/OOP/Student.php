<?php

class Student
{
    private $name;
    private $course=1;

    public function __construct($name)
    {
        $this->name = $name;
    }

    private function isCourseCorrect()
    {
        if ($this->course >= 1 && $this->course <= 5) {
            return true;
        }
    }

    public function getName()
    {
        return $this->name;
    }

    public function getCourse()
    {
        return $this->course;
    }

    public function tranferToNewCourse()
    {
        if ($this->isCourseCorrect()) {
            $this->course += 1;
        }
    }

}