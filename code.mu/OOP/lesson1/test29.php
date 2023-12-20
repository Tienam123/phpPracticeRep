<?php

namespace lesson1\example29;

class Test
{
    public static function method()
    {
        return '!!!!';
    }
}

var_dump(Test::method());

class Math
{
    public static function getSum($a, $b)
    {
        return $a + $b;
    }

    public static function getProduct($a, $b)
    {
        return $a * $b;
    }

    public static function getDoubleSum($a, $b)
    {
        return 2 * self::getSum($a, $b);
    }
}

var_dump(Math::getProduct(1, 5));
var_dump(Math::getSum(43, 22));

class ArraySumHelper
{
    public static function getSum1($arr)
    {
        return self::getSum($arr, 1);
    }

    public function getSum2($arr)
    {
        return self::getSum($arr, 2);
    }

    public function getSum3($arr)
    {
        return self::getSum($arr, 3);
    }

    public function getSum4($arr)
    {
        return self::getSum($arr, 4);
    }

    private function getSum($arr, $power) {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}

class Geometry {
    private static $PI = 3.14;
    // Площадь круга:
    public static function getCircleSquare($radius)
    {
        return self::$PI * pow($radius,2);
    }

    // Длина окружности:
    public static function getCircleСircuit($radius)
    {
        return 2 * self::$PI * $radius;
    }
    public static function getVCircle($radius)
    {
        return 43 * self::$PI * $radius;
    }
}