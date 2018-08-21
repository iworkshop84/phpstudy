<?php
require __DIR__ . DIRECTORY_SEPARATOR . 'functions.php';
session_start();

if(!file_exists('imgs')){
    mkdir('imgs');
}

$scanned_directory = array_values(array_diff(scandir('imgs'), array('..', '.')));

$users = file('users.txt');


foreach ($users as $key=>$value){
    $users[$key] = trim($value);
}

foreach ($users as $key=>$value){
    $users[$key] = explode('~^~', $value);
}


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
   <?php if(isset($_SESSION['login'])): ?>
    <a href="upload.php">Загрузка файлов</a>
    <?php endif;?>
    <a href="login.php">Авторизация</a>
    <a href="login.php?register=yes">Регистрация</a>
    <a href="login.php?logaut=yes">Выход</a>
</div>


<?php foreach ($scanned_directory as $key=>$value):
    $key++;
?>
        <a href="imgs/<?= $value; ?>"><img src="imgs/<?= $value; ?>"  alt="<?= $value; ?>" width="300px"/></a>
<?php
    if ($key % 4 == 0){
        echo '<br/>';
    }
   endforeach;
?>

</div>
</body>
</html>
