<?php

function uploadFile($file){
    $newName = 'imgs/' . basename($file['image']['name']);

    if($file['image']['size'] > 2000000){
        return 'Слишком большой файл';
    }elseif (($file['image']['type'] != 'image/jpeg') && ($file['image']['type'] != 'image/gif') && ($file['image']['type'] != 'image/png')){
        return 'Не верный формат файла';
    }elseif ($file['image']['error'] != 0){
        return 'Ошибка при загрузке';
    }

    if (is_uploaded_file($file['image']['tmp_name'])) {
        $res = move_uploaded_file($file['image']['tmp_name'],$newName);
        if ($res) {
            header('Location: http://mysite.loc/');
            exit;
        } else {
            return 'Не удалось загрузить файл';
        }
    }
}


// Авторизация пользователя
function autoris ($name, $passw){
    $users = ['andrew'=>'123456', 'admin'=>'admin', 'user'=>'qwerty'];
    //$users = file('users.txt');

    if(array_key_exists($name, $users) && ($users[$name] == $passw)){

        $_SESSION['login'] = $name;
        header('Location: http://mysite.loc/');
        exit;

    }else{
        return 'Неправильный логин или пароль';
    }
}