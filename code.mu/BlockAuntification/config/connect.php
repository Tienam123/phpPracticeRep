<?php


$servername = 'localhost';
$login = 'root';
$password = '';
$dbName = 'api_tester';

$connect = new mysqli($servername,$login,$password,$dbName);
if ($connect->connect_error) {
    die("Ошибка подключения" . $connect->connect_error);
}