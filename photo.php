<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
session_start();

    if(!isset($_GET['id'])){
        header('Location: http://mysite.loc/');
        exit;
    }

    $row = bdPhotoSingle($_GET['id']);

    if (!isset($row)){
        header('Location: http://mysite.loc/');
        exit;
    }
$count = $row['pviews']+1;

photoCountUp($_GET['id'],$count);

?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <title>Фотогаларея</title>
</head>
<body>
<div style="margin-left: auto; margin-right: auto; width: 1300px ">
    <div style="font-size: 18px; margin-left: auto; margin-right: auto; width: 500px; padding: 30px 0 30px 0; ">
        <a href="index.php">Главная</a>
        <?php //if(isset($_SESSION['login'])): ?>
        <a href="upload.php">Загрузка файлов</a>
        <?php //endif;?>
        <a href="login.php">Авторизация</a>
        <a href="login.php?register=yes">Регистрация</a>
        <a href="login.php?logaut=yes">Выход</a>
    </div>

    <div style="float: left">
       <img src="<?= $row['ppath']; ?>"  alt="<?= $row['palt']; ?>" title="<?= $row['palt']; ?>"/>
        <?= '<br/>'. '<b>Название</b>: '.$row['pname']; ?>
        <?= '<br/>'. '<b>Подпись изображения</b>: '.$row['palt']; ?>
        <?= '<br/>'. '<b>Находится по урлу</b>: http://'.$_SERVER['HTTP_HOST'] .'/'. $row['ppath']; ?>
        <?= '<br/>'. '<b>Количество просмотров</b>: '.$row['pviews']; ?>
        <br/>
        <br/>
    </div>






</div>
</body>
</html>