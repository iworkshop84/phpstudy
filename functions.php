<?php


function bdConnect(){
    $link = mysqli_connect('localhost', 'root', '', 'gallery');

    if (!$link) {
        die('Ошибка подключения (' . mysqli_connect_errno() . ') '
            . mysqli_connect_error());
    }else{
        return $link;
    }
}


function uploadFile($file, $imgAlt){
    $newName = 'imgs/' . basename($file['image']['name']);

    if(empty($imgAlt)){
        $imgAlt = pathinfo($newName, PATHINFO_FILENAME);
    }

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
            $pname = $file['image']['name'];

            $result =  mysqli_query(bdConnect(),
                "INSERT INTO photo (pname, palt, ppath) VALUES ('"
                .mysqli_real_escape_string(bdConnect(), $pname)."', '"
                .mysqli_real_escape_string(bdConnect(), $imgAlt)."', '"
                .mysqli_real_escape_string(bdConnect(), $newName)."')");
            if(!$result){
                return 'Ошибка запроса!';
            }

            header('Location: http://mysite.loc/');
            exit;
        } else {
            return 'Не удалось загрузить файл';
        }
    }
}

function logaut(){
    if(isset($_GET['logaut']) && $_GET['logaut'] = 'yes'){
        session_destroy();
        header('Location: http://mysite.loc/');
        exit;
    }
}

function bdPhotosSelect(){
    $result =  mysqli_query(bdConnect(),"SELECT * FROM photo ORDER BY pviews DESC");
    if(!$result){
        return 'Ошибка запроса!';
    }else{
        return $result;
    }
}

function bdPhotoSingle($id){
    $result =  mysqli_query(bdConnect(),"SELECT * FROM photo WHERE id='".mysqli_real_escape_string(bdConnect(), $id)."'");
    if(!$result){
        return 'Ошибка запроса!';
    }else{
        $row = mysqli_fetch_assoc($result);
        return $row;
    }
}

function photoCountUp($id, $count){
    $result =  mysqli_query(bdConnect(),"UPDATE photo SET pviews='".$count."' 
                                                WHERE id='".$id."'");
    if(!$result){
        return 'Ошибка запроса!';
    }
}