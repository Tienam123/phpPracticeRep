<?php

class Arr
{
    private $numbers = [];

    public function addNum($num)
    {
        $this->numbers[] = $num;
    }

    public function getSum()
    {
        return array_sum($this->numbers);
    }
}