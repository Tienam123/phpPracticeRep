<?php


class Human
{
    public string $name;
    public string $surname;
    protected string $fatherName = 'Ruslanovich';
    public int $birthYear;
    public string $country = 'Russian';

    public function getAge(): int|string
    {
        return date('Y') - $this->birthYear;
    }

    public function getFatherName(): string
    {
        if ($this->country == 'Russian' || $this->country == 'Ukraine') {
            return $this->fatherName;
        }
    }

    public function __construct($name, $birthYear)
    {
        if (is_string($name)
            && mb_strlen($name) > 0) {
            $this->name = $name;
        } else {
            die('Неверное значение');
        }
        if (is_int($birthYear) &&
            $birthYear > date('Y') - 150) {
            $this->birthYear = $birthYear;
        } else {
            die('Неверное значение возраста ');
        }

    }
}

$me = new Human('alex', 123);
echo $me->getFatherName();