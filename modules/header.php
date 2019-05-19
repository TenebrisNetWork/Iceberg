<?php require_once 'includes/global.inc.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="../public/css/login.css" rel="stylesheet">
    <link href="../public/css/header.css" rel="stylesheet">
    <link href="../public/css/index.css" rel="stylesheet">
    <link href="../public/css/about.css" rel="stylesheet">
    <link href="../public/css/article.css" rel="stylesheet">
    <link href="../public/css/registration.css" rel="stylesheet">
    <link href="../public/css/articleRead.css" rel="stylesheet">
</head>
<body>
    <?php if(isset($_SESSION["logged_in"])): ?>

    <header>
        <a class ="but1" href="/personalArea.php">Личный кабинет</a>
        <a class ="but2" href="/exit.php">Выход</a>

        <img class ="logo" src ="public/images/logo.png">

<nav>
        <ul class = "menu">
            <li><a href="/article.php">Статьи</a></li>

            <li><a href="/index.php">Главная</a></li>

            <li><a href="/about.php">О нас</a></li>
        </ul>
</nav>

    </header>
</nav>

    <?php else :?>

    <header>

        <a class ="but3" href="/registration.php">Регистрация</a>
        <a class ="but4" href="/login.php">Вход</a>

        <img class ="logo" src ="public/images/logo.png">

<nav>
        <ul class = "menu">
            <li><a href="/article.php">Статьи</a></li>

            <li><a href="/index.php">Главная</a></li>

            <li><a href="/about.php">О нас</a></li>
        </ul>
</nav>

    </header>
</nav>


<?php endif;?>

