<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
session_start();
if(isset($_POST['logsite'])){
    if(!empty($_POST['login']) && !empty($_POST['password'])){
        $res = autoris($_POST['login'], $_POST['password']);
    }else{
        $res = 'Введите логин и пароль';
    }
}
if(isset($_GET['register']) && $_GET['register'] == 'yes') {
    if (isset($_POST['regsite'])) {
        if (!empty($_POST['rlogin']) && !empty($_POST['rpassword'])) {
            file_put_contents('users.txt',
                trim($_POST['rlogin']) . '~^~' . trim($_POST['rpassword']) . PHP_EOL,
                FILE_APPEND | LOCK_EX);
            header('Location: http://mysite.loc/login.php');
            exit;
        } else {
            $res = 'Введите логин и пароль';
        }
    }
}

    logaut();
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Авторизация</title>
</head>
<body>
<div style="margin-left: auto; margin-right: auto; width: 1300px ">
    <div style="font-size: 18px; margin-left: auto; margin-right: auto; width: 500px; padding: 30px 0 30px 0; ">
        <a href="index.php">Главная</a>
        <?php if(isset($_SESSION['login'])): ?>
            <a href="upload.php">Загрузка файлов</a>
        <?php endif;?>
        <a href="login.php">Авторизация</a>
        <a href="login.php?register=yes">Регистрация</a>
        <a href="login.php?logaut=yes">Выход</a>
    </div>



    <div style="margin-left: auto; margin-right: auto; width: 600px ">

        <?php if(isset($_GET['register']) && $_GET['register'] == 'yes'):?>

            <form action="/login.php?register=yes" method="post" name="login">
                <fieldset>
                    <legend >Регистрация</legend>
                    <p>Логин: <input name="rlogin" type="text" size="30px"></p>
                    <p>Пароль: <input name="rpassword" type="password" size="30px"></p>
                    <input type="submit" value="Зарегистрироваться" name="regsite">
                </fieldset>
            </form>

        <?php else: ?>

            <form action="/login.php" method="post" name="login">
                <fieldset>
                    <legend >Авторизация</legend>
                    <p>Логин: <input name="login" type="text" size="30px"></p>
                    <p>Пароль: <input name="password" type="password" size="30px"></p>
                    <input type="submit" value="Войти" name="logsite">
                </fieldset>
            </form>

        <?php endif;?>


        <?php
        if(isset($res)){echo $res;}
        ?>
    </div>




</div>
</body>
</html>