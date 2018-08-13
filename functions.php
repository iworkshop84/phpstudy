<?php
// Авторизация пользователя
function autoris ($name, $passw, $remember){
    $users = ['andrew'=>'123456', 'admin'=>'admin', 'user'=>'qwerty'];
    if(array_key_exists($name, $users) && ($users[$name] == $passw)){
        $_SESSION['login'] = $name;

        if ($remember == 'on'){
            setcookie('login', $name, time()+86400);
            setcookie('pass', $passw, time()+86400);
        }


        header('Location: http://mysite.loc/');
        exit;
    }else{
        return 'Неправильный логин или пароль';
    }
}

// Выход с удалением данных в сессии
function logaut(){
    if(!empty($_POST['logaut'])){
        session_destroy();
        setcookie('login', false, time()-86400);
        setcookie('pass', false, time()-86400);
        header('Location: http://mysite.loc/');
        exit;
    }
}

// Выбор стиля отображения с проверкой на нового посетителя
function csschoise(){
    if(!isset($_SESSION['cssstyle'])){
        $style = 'style1.css';
    }else{
        $style = $_SESSION['cssstyle'];
    }
    return $style;
}

// Проверка был ли пользователь авторизирован
function checklogin(){
    if(!isset($_SESSION['login'])){
        header('Location: http://mysite.loc/');
        exit;
    }
}

// Смена стиля дизайна
function switchstyle(){
    switch (true){
        case (isset($_POST['style1'])):
            $_SESSION['cssstyle'] = 'style1.css';
            break;
        case (isset($_POST['style2'])):
            $_SESSION['cssstyle'] = 'style2.css';
            break;
        case (isset($_POST['style3'])):
            $_SESSION['cssstyle'] = 'style3.css';
            break;
    }
}