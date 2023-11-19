<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Php 5.6 Урок</title>
</head>
<body>
<?php
include 'Car.php';
$car = new Car('BMW', 'black', 380);
$vaz = new Car('Vaz', 'red', 170);
$zaz = new Car('ZAZ', 'red', 140);
var_dump(Car::$_counterOfCars);

?>
</body>
</html>