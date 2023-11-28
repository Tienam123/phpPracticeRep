<?php
session_start();
require "../config/connect.php";
require_once "../config/functions.php";
var_dump($_POST);
if ($_POST['login']=='') {
    header('Location: login.php');
}
if (!empty($_POST['login'] && !empty($_POST['password']))) {
    $login = $_POST['login'];
    $password = $_POST['password'];
    $query = "SELECT * FROM users WHERE login='$login' and password='$password'";
    $res = $connect->query($query);
    $data = $res->fetch_assoc();

    if (!empty($data)) {
        $updateQuery = "UPDATE users SET isOnline='true' WHERE login='$login'";
        $res = $connect->query($updateQuery);
        $_SESSION['login'] = $login;
        $_SESSION['message'] = 'Регистрация прошла успешно';
        $_SESSION['auth'] = true;
        header('Location: ../index.php');
    } else {
        $updateQuery = "UPDATE users SET isOnline='false'";
        $res = $connect->query($updateQuery);
        $_SESSION['message'] = 'Логин или пароль введены неверно';
        $_SESSION['auth'] = false;
        header('Location: ../vendor/login.php');
    }
}