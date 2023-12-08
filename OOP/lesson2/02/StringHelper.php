<?php

namespace lesson2\example3\demo02;

class StringHelper
{
    public static function toUpperCase($string)
    {
        return mb_strtoupper($string, 'utf-8');
    }
}

echo StringHelper::toUpperCase('Vladyslav') . PHP_EOL;