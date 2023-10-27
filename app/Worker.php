<?php

namespace App;

abstract class Worker implements WorkerInterface
{
    private string $name;
    private int $age;

    /**
     * @param  string  $name
     * @param  int  $age
     */
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }

    public function getName(): string
    {
        return $this->name;
    }


}