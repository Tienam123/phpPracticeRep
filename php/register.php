<?php
session_start();
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Регистрация и авторизация</title>
    <link rel="stylesheet" href="./index.css">
</head>
<body>
<form action="./vendor/signup.php" method="post" enctype="multipart/form-data">
    <label for="">Введите свое полное имя</label>
    <input type="text" name="full_name" placeholder="Введите свое полное">
    <label for="">Введите свой логин</label>
    <input type="text" name="login" placeholder="Введите свой логин">
    <label for="">Введите свой адресс электронной почты</label>
    <input type="email" name="email" placeholder="Введите свой E-mail">
    <label for="">Изображение профиля</label>
    <input type="file" name="avatar">
    <label for="">Введите пароль</label>
    <input type="password" name="password" placeholder="Введите свой пароль">
    <label for="">Введите подтверждение пароля</label>
    <input type="password" name="password_confirm" placeholder="Введите подверждение пароля">
    <button type="submit">Войти</button>
    <p>
        У вас есть аккаунт? - <a href="./index.php">Войти</a>
    </p>
    <?php
    if (isset($_SESSION['message'])) {
        $session = $_SESSION['message'];
        echo '<p class="msg">'. $session . '</p>';
    }
    unset($_SESSION['message']);
    ?>
</form>
</body>
</html>