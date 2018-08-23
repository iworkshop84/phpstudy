<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
session_start();

    if(!file_exists('imgs')){
        mkdir('imgs');
    }

      $resultPS = bdPhotosSelect();


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


    <?php while ($row = mysqli_fetch_assoc($resultPS)): ?>
    <div style="float: left">
    <a href="<?= '/photo.php?id='.$row['id']; ?>"><img src="<?= $row['ppath']; ?>"  alt="<?= $row['palt']; ?>" title="<?= $row['palt']; ?>" width="300px"/></a>
        <?= '<br/>'. '<b>Название</b>:'.$row['palt']; ?>
    </div>
    <?php endwhile;?>





</div>
</body>
</html>