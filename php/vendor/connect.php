<?php

$server = 'localhost';
$login = 'root';
$password = '';
$db = 'api_tester';

$connect = mysqli_connect($server,$login,$password,$db);
if (!$connect) {
    die('Не удалось подключиться к базе данных');
}