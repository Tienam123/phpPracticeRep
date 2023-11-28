<?php session_start(); ?>
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
<?php
require 'vendor/connect.php';
?>
<form action="./vendor/signup.php" method="post">
    <label for="">Логин</label>
    <input type="text" id="" placeholder="Введите свой логин">
    <label for="">Пароль</label>
    <input type="password" id="" placeholder="Введите пароль">
    <button type="submit">Войти</button>
    <p>
        У вас нет аккаунта? - <a href="./register.php">Зарегистрируйтесь</a>
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