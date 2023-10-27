<?php

namespace App;

class Developer extends Worker
{
    use HasRest;

    protected string $position = 'Developer';

    public function work()
    {
        // TODO: Implement work() method.
    }
}