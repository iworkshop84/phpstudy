<?php
include __DIR__ . '/functions.php';

session_start();

checklogin();

switchstyle();

logaut();

$style = csschoise();

?>
<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="/<?= $style; ?>">
    <title>Настройки профиля</title>
</head>
<body>
<div id="wraper">
    <div id="posts">

        <p>Приветствуем тебя на странице настроек нашего сайта!</p>
        <p>Вы вошли как, <b><?= $_SESSION['login']; ?></p></b>
    </div>

    <div id="rightsidebar">
        <p>Меню:</p>
        <p><a href="/index.php"> Главная </a></p>


        <form action="/setting.php" method="post" name="logaut">
            <p><input type="submit" value="Стиль 1" name="style1"></p>
            <p><input type="submit" value="Стиль 2" name="style2"></p>
            <p><input type="submit" value="Стиль 3" name="style3"></p>
            <p><input type="submit" value="Выйти" name="logaut"></p>
        </form>
    </div>
</div>

</body>
</html>

