<?php
require '../config/connect.php';
require_once '../config/functions.php';
if (isset($_SESSION)) {
    var_dump($_SESSION);
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../style.css">
    <title>Практика авторизации</title>
</head>
<body>
<div id="root">
    <header class="header">
        <div class="header__container">
            <a href="../index.php"><img src="../assets/Logo.svg" alt="" width="105" height="40"></a>
            <ul class="header__menu header-menu" style="display: flex;justify-content: center;
        align-items: center;gap: 20px;font-family: Montserrat;font-size: 14px;font-style: normal;font-weight: 400;line-height: normal;rgba(31, 32, 65, 0.50)
">
                <li class="header-menu__item"><a href="#">О нас</a></li>
                <li class="header-menu__item"><a href="#">Услуги</a></li>
                <li class="header-menu__item"><a href="#">Вакансии</a></li>
                <li class="header-menu__item"><a href="#">Новости</a></li>
                <li class="header-menu__item"><a href="#">Соглашения</a></li>
            </ul>
            <ul class="header__menu-actions header-actions">
                <li class="header-actions__item"><a href="">Зарегистрироваться</a></li>
            </ul>
        </div>
    </header>
    <main class="page">
        <section class="login">
            <div class="login__container">

                <form action="aunth.php" method="post">
                    <input type="text" placeholder="Введите логин" name="login">
                    <input name="password" placeholder="Введите пароль" type="password">
                    <button type="submit">Войти</button>
                </form>
            </div>
        </section>
    </main>
    <footer style="background-color: antiquewhite" class="footer">Footer</footer>
    <?php
    ?>
</div>
</body>
</html>