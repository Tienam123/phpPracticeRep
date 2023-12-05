<?php
declare(strict_types=1);
require_once "../vendor/autoload.php";
isset($_GET['id']) ? $id = $_GET['id'] : $id = '';
var_dump($id);
$number = 5;
$string = 5;
dd($number.$string);