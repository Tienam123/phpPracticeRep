<?php

namespace lesson3\example1\demo02;

class Base
{
    public $name = 'Vasya';

    public function first()
    {
        return 'first';
    }

}

class Sub extends Base
{
    public $date = '2000-01-12';
    
}


$base = new Base();

echo $base->first().PHP_EOL;


$sub = new Sub();

echo $sub->first().PHP_EOL;