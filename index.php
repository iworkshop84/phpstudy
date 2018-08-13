<?php
include __DIR__ . '/functions.php';
session_start();

if(isset($_COOKIE['login']) && isset($_COOKIE['pass'])){
    $users = ['andrew'=>'123456', 'admin'=>'admin', 'user'=>'qwerty'];
    if(array_key_exists($_COOKIE['login'], $users)&& ($users[$_COOKIE['login']] == $_COOKIE['pass'])){
        $_SESSION['login'] = $_COOKIE['login'];
    }
}

if(isset($_POST['logsite'])){

if(!empty($_POST['login']) && !empty($_POST['password'])){
    if(isset($_POST['check'])){
        $check = $_POST['check'];
    }else{
        $check = 'no';
    }
    $res = autoris($_POST['login'], $_POST['password'], $check );
}

    if(empty($_POST['login']) || empty($_POST['password'])){
        $res = 'Введите логин и пароль';
    }
}


switchstyle();

logaut();

$style = csschoise();

?>

<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">

    <link rel="stylesheet" type="text/css" href="/<?= $style; ?>">
    <title>Пятый урок - ДЗ</title>
</head>
<body>
<div id="wraper">



<?php
if(!isset($_SESSION['login'])):
?>
<form action="/index.php" method="post" name="login">
    <fieldset>
    <legend >Авторизация</legend>
        <p>Логин: <input name="login" type="text" size="30px"></p>
        <p>Пароль: <input name="password" type="password" size="30px"></p>
        <p>Запомнить меня<input type="checkbox" name="check"></p>
        <input type="submit" value="Войти" name="logsite">
    </fieldset>
</form>

<?php
if(isset($res)){
    echo $res;
}
?>
<?php else: ?>
    <div id="posts">
        <p>Приветствуем тебя на главной странице нашего сайта!</p>
        <p>Вы вошли как, <b><?= $_SESSION['login']; ?></b></p>

        
    </div>


    <div id="rightsidebar">
    <p>Меню:</p>
    <p><a href="/setting.php"> Настройки профиля </a></p>


    <form action="/index.php" method="post" name="logaut">
            <p><input type="submit" value="Стиль 1" name="style1"></p>
            <p><input type="submit" value="Стиль 2" name="style2"></p>
            <p><input type="submit" value="Стиль 3" name="style3"></p>
            <p><input type="submit" value="Выйти" name="logaut"></p>
    </form>
    </div>


<?php endif; ?>



</div>
</body>
</html>