<?php

class Task
{
    private $completed;
    private $category;
    private $priority;

    public function __construct($completed, $category, $priority)
    {
        $this->completed = $completed;
        $this->category = $category;
        $this->priority = $priority;
    }

public function getTask() {
        return $this->completed . ' , ' . $this->category . ' , ' . $this->priority;
}
}