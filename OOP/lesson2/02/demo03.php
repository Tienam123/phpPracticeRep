<?php

namespace lesson2\example3\demo03;

class Discount
{
    public function callCost($cost)
    {
        if ($cost >= 1000) {
            return $cost * 0.95;
        } else {
            return $cost;
        }
    }
}

$discount = new Discount();
$discount->callCost(255).PHP_EOL;
echo $discount->callCost(1500).PHP_EOL;