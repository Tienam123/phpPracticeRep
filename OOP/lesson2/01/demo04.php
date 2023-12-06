<?php

namespace lesson2\example1\demo04;

class Student
{
    const TYPE_OCHN = 1;
    const TYPE_ZAOCHN = 2;
    private $name;
    private $type;

    public function __construct($name, $type)
    {
        $this->name = $name;
        $this->type = $type;
    }

    public static function getTypeList()
    {
        return [
            self::TYPE_OCHN   => 'Очный',
            self::TYPE_ZAOCHN => 'Заочный'
        ];
    }

    public function getName()
    {
        return $this->name;
    }

    public function getType()
    {
        return $this->type;
    }
}

var_dump(Student::getTypeList());
$student = new Student('Vasya Ivanov', Student::TYPE_OCHN);

echo $student->getType().PHP_EOL;
var_dump(__DIR__);
