<?php

namespace lesson3\example1\demo08;

class Base
{
    public function first()
    {
        return 'first + '.$this->second();
    }

    public function second()
    {
        return 'second';
    }

}


$base = new Base();
echo $base->first().PHP_EOL;