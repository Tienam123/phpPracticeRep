<?php

namespace lesson2\example3\demo02;

class Discount
{
    public static function ()
    {
        if ($cost >= 1000) {
            return $cost * 0.95;
        } else {
            return $cost;
        }
    }
}

echo Discount::caclCost(850).PHP_EOL;
echo Discount::caclCost(850).PHP_EOL;