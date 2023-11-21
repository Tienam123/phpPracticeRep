<?php
$user = 'root';
$password = '';
$localhost = 'localhost';
$name = 'api_tester';
$connect = mysqli_connect($localhost,$user,$password,$name);
mysqli_query($connect, "SET NAMES 'utf8'");