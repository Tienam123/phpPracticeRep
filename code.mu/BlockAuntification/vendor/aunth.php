<?php
session_start();
require "../config/connect.php";
require_once "../config/functions.php";
var_dump($_POST);
if (!empty($_POST['login'] && !empty($_POST['password']))) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE login='$login' and password='$password'";
    $res = $connect->query($query);
    $data = $res->fetch_assoc();

    if (!empty($data)) {
        $query = "UPDATE users SET isOnline='true' WHERE login='$login'";
        $res = $connect->query($query);
        $_SESSION['message'] = 'Регистрация прошла успешно';
        $_SESSION['auth'] = true;
        header('Location: ../index.php');
    } else {
        $query = "UPDATE users SET isOnline='false'";
        $res = $connect->query($query);
        $_SESSION['message'] = 'Логин или пароль введены неверно';
        $_SESSION['auth'] = false;
        header('Location: ../vendor/login.php');
    }
}