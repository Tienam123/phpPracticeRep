<?php
session_start();
require_once 'connect.php';

var_dump($_POST);
var_dump($_FILES);
$full_name = $_POST['full_name'];
$login = $_POST['login'];
$mail = $_POST['email'];
$password = $_POST['password'];
$password_confirm = $_POST['password_confirm'];
if ($password === $password_confirm && $password!= '') {

    $path = 'uploads/' . time() . $_FILES['avatar']['name'];
    $target_path = '../' . $path;

    if (!move_uploaded_file($_FILES['avatar']['tmp_name'], $target_path)) {
        $_SESSION['message'] = 'Ошибка при загрузке файла';
        header('Location: ../register.php');
    }
    $password = md5($password);
    var_dump($password);
    mysqli_query($connect,"INSERT INTO `users` (`id`, `full_name`, `login`, `email`, `password`, `avatar`) VALUES (NULL, '$full_name', '$login', '$mail', '$password', '$path')" );
    $_SESSION['message'] = 'Регистрация прошла успешно';
    header('Location: ../index.php');
} else {
    $_SESSION['message'] = 'Пароли не совпадают';
    header('Location: ../register.php');
}
?>
