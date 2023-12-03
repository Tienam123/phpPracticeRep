<?php
require "../config/connect.php";
session_start();
$login = $_POST['login'];
$email = $_POST['email'];
$password = $_POST['password'];
$name = $_POST['name'];
$secondName = $_POST['secondName'];
$confPass = $_POST['confPass'];
$query = "SELECT * FROM users WHERE login='$login'"``;
$res = $connect->query($query);
if ($login !== '' && $secondName !== '' && $name !== '' && $password !== '') {
    if ($res->num_rows > 0) {
        $_SESSION['message'] = 'Пользователь с таким логином уже существует';
        header('Location: register.php');
        $_SESSION['auth'] = false;
        die();
    } elseif ($confPass !== $password) {
        $_SESSION['message'] = 'Введеные вами пароли не совпадают';
        header('Location: register.php');
        $_SESSION['auth'] = false;
        die();
    } else {
        $query = "INSERT INTO users (`id`, `secondName`,`name`, `login`, `email`, users.`password`, `role`, `isOnline`) VALUES 
                            (null,'$secondName','$name','$login','$email','$password','user','true')";
        $res = $connect->query($query);
        $_SESSION['auth'] = true;
        header('Location: ../index.php');
    }
} else {
    $_SESSION['message'] = 'Строки не могут быть пустыми';
    $_SESSION['auth'] = false;
    header('Location: register.php');
}


