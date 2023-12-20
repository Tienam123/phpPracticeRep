<?php

namespace lesson1\example24;

class Arr
{
    private $nums = []; // массив чисел
    private $sumHelper;
    private $sumAvg;
    public function __construct()
    {
        $this->sumHelper = new SumHelper;
        $this->sumAvg = new AvgHelper;
    }
    public function getSum23()
    {
        $nums = $this->nums;
        return $this->sumHelper->getSum2($nums) + $this->sumHelper->getSum3($nums);
    }
    // Добавляем число в массив:
    public function add($num)
    {
        $this->nums[] = $num;
    }
    public function getAvgMeanSum()
    {
        return $this->sumAvg->getAvg($this->nums) + $this->sumAvg->getMeanSquare($this->nums);
    }

}
class SumHelper
{
    // Сумма квадратов:
    public function getSum2($arr)
    {
        return $this->getSum($arr, 2);
    }

    // Сумма кубов:
    public function getSum3($arr)
    {
        return $this->getSum($arr, 3);
    }

    // Вспомогательная функция для нахождения суммы:
    private function getSum($arr, $power) {
        $sum = 0;

        foreach ($arr as $elem) {
            $sum += pow($elem, $power);
        }

        return $sum;
    }
}
class AvgHelper
{
    public function getMeanSquare(array $arr)
    {
        $newArr = [];
        foreach ($arr as $item) {
           $newArr[] = pow($item,2);
        }
        return sqrt( array_sum($newArr)/count($newArr));
    }
    public function getAvg(array $arr)
    {
        return array_sum($arr)/count($arr);
    }
}

$arr = new Arr(); // создаем объект

$arr->add(1);
$arr->add(2);
$arr->add(4);
$arr->add(5);
$arr->add(6);
$arr->add(7);
$arr->add(8);
$arr->add(9);
$arr->add(10);
$arr->add(11);
$arr->add(12);
$arr->add(13);
$arr->add(14);
var_dump($arr->getAvgMeanSum());
var_dump($arr);