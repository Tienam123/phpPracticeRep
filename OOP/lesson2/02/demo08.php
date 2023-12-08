<?php

namespace lesson2\example3\demo08;

function createDiscount($limit, $percent)
{
    return function ($cost) use ($limit, $percent) {
        if ($cost >= $limit) {
            return $cost * (1 - $percent / 100);
        } else {
            return $cost;
        }
    };
}

$num = createDiscount(5000, 50);
var_dump(createDiscount(1000, 50));
var_dump($num);
?>