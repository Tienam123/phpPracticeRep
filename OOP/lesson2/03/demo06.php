<?php

namespace lesson3\example1\demo06;

class Base
{

    public $name;
    public $mail;

    public function __construct($name, $email)
    {
        $this->name = $name;
        $this->mail = $email;
    }

    public function first()
    {
        return 'first';
    }

}

class Sub extends Base
{
    public $status;

    public function __construct($name, $email, $status)
    {
        parent::__construct($name, $email);
        $this->status = $status;

    }

    public function first()
    {
        return 'first_2';
    }

    public function second()
    {
        return 'second';
    }

}

class Third extends Base
{
    public function third()
    {
        return 'third';
    }
}


$base = new Base('Vladyslav', 'dr.tienam123@gmail.com');
$sub  = new Sub('Vladyslav', 'dr.tienam123@gmail.com', 1);
var_dump($sub);