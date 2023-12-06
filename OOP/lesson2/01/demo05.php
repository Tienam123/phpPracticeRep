<?php

namespace lesson2\example1\demo05;

class Student
{
    private $firstName;
    private $lastName;
    private $birthDate;


    public function __construct($firstName, $lastName, $birthDate)
    {
        $this->firstName = $firstName;
        $this->lastName  = $lastName;
        $this->birthDate = $birthDate;
    }

    public function getFullName()
    {
        return $this->lastName.' '.$this->firstName;
    }
}

$student = new Student('Vladyslav', 'Honchar', '25-10-1990');

class StudentRepository
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function findAll()
    {
        $rows     = file($this->file);
        $students = [];
        foreach ($rows as $row) {
            $values     = array_map('trim', explode(';', $row));
            $students[] = new Student($values[0], $values[1], $values[2]);
        }

        return $students;
    }

    public function saveAll(array $students, $file)
    {
        $rows = [];
        foreach ($students as $student) {
            $rows[] = implode(';', [
                $student->lastName,
                $student->firstName,
                $student->birthDate
            ]);
        }
        file_put_contents($this->file, implode(PHP_EOL, $rows));
    }
}

class XMLStudentRepository
{
    private $file;

    public function __construct($file)
    {
        $this->file = $file;
    }

    public function findAll()
    {
        $rows     = simplexml_load_file($this->file);
        $students = [];
        foreach ($rows->student as $row) {
            $students[] = new Student($row->lastName, $row->firstName, $row->birthDate);
        }

        return $students;
    }
}

// ================================================================================
$type = 'txt';
$file = __DIR__.'/list.txt';

switch ($type) {
    case 'txt':
        $studentRepository = new StudentRepository($file);
        break;
    case 'xml':
        $studentRepository = new XMLStudentRepository($file);
        break;
    default:
        die('Incorrect type'.$type);
}

###############################################################################

$students = $studentRepository->findAll();

foreach ($students as $student) {
    echo $student->getFullName().' '.$student->birthDate.PHP_EOL;
}
$studentRepository->saveAll($students);