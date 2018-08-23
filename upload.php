<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
session_start();


if(isset($_FILES['image'])){
    echo uploadFile($_FILES, $_POST['imgalt']);
}
?>

<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">

    <title>Загрузка фотографий</title>
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

    <div style="margin-left: auto; margin-right: auto; width: 600px ">
    <form id="upload" action="/upload.php" method="post" enctype="multipart/form-data">
        <input type="file" name="image" />
        <input type="text" name="imgalt" placeholder="Название изображения"/>
        <input type="submit" name="Отправить">
    </form>
    </div>

</div>
</body>
</html>