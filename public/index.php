<?php
require_once('../vendor/autoload.php');
$developer = new \App\Developer('Boris', 33);

$salary = \App\Salary::count([8, 6, 3, 13, 5]);
var_dump(\App\Salary::$totalHours);