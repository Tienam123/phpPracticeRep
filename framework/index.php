<?php
require_once "vendor/autoload.php";

class Man
{

    public $hair = 'Русый';
    public $body = 'Стройный';
}

$girl = new Man();
$data = [
    1 => [
        "id" => '1',
        'name' => 'Vladyslav',
        'surname' => 'Honchar',
        "age" => 32
    ],
];

var_dump($data);
dump($data);