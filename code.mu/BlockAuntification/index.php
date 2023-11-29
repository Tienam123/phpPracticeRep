<?php
session_start();
require "./config/connect.php";
if (isset($_GET['logout'])) {
    session_unset();
    session_destroy();

    header('Location: index.php');
}
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/modern-normalize/2.0.0/modern-normalize.min.css"
          integrity="sha512-4xo8blKMVCiXpTaLzQSLSw3KFOVPWhm/TRtuPVc4WG6kUgjH6J03IBuG7JZPkcWMxJ5huwaBpOpnwYElP/m6wg=="
          crossorigin="anonymous" referrerpolicy="no-referrer"/>
    <link rel="stylesheet" href="./style.css">
    <title>Практика авторизации</title>
</head>
<body>
<div id="root">
    <header class="header">
        <div class="header__container">
            <a href="./index.php"><img src="./assets/logo-icon.svg" alt="" width="105" height="40"></a>
            <ul class="header__menu header-menu" style="display: flex;justify-content: center;
        align-items: center;gap: 20px;font-family: Montserrat;font-size: 14px;font-style: normal;font-weight: 400;line-height: normal;rgba(31, 32, 65, 0.50)
">
                <li class="header-menu__item"><a href="#">Лента</a></li>
                <li class="header-menu__item"><a href="#">Знакомства</a></li>
                <li class="header-menu__item"><a href="#">Друзья</a></li>
                <li class="header-menu__item"><a href="#">Сообщения</a></li>
            </ul>
            <ul class='header__menu-actions header-actions'>
                <?php
                if (!empty($_SESSION['auth'])) {
                    echo "<li class='header-actions__item'><a style='display: block' href='./vendor/cabinet.php'>Личный кабинет</a></li><li class='header-actions__item'><a style='display: block' href='?logout=true'>Выход</a></li>";
                } else { ?>
                    <?php
                    echo "<li class='header-actions__item'><a href='./vendor/login.php'>Войти</a></li><li class='header-actions__item'><a href='./vendor/register.php'>Зарегистрироваться</a></li>";
                }
                ?>
            </ul>
        </div>
    </header>
    <main class="page">
        <section class="hero">
            <div class="hero__container">

            </div>
        </section>

    </main>
    <footer style="background-color: antiquewhite" class="footer">Footer</footer>
</div>
</body>
</html>