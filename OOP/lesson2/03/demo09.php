<?php

namespace lesson3\example1\demo09;

class Base
{
    public function first()
    {
        return 'first + '.$this->second();
    }

    private function second()
    {
        return 'second';
    }

}


$base = new Base();
echo $base->first().PHP_EOL;