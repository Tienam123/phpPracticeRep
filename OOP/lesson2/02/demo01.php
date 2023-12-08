<?php

namespace lesson2\example3\demo01;

function toUpperCase($string)
{
    return mb_strtoupper($string, 'utf8');
}

echo toUpperCase('Vasya').PHP_EOL; //VASYA
