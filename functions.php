<?php


    function TableTruth ($fNumber, $sNumber, $Operation){

        switch ($Operation){
            case '&&':
                if(((bool)$fNumber == true) && ((bool)$sNumber == true)){
                    return true;
                }else{
                    return false;
                }
                break;
            case '||':
                if(((bool)$fNumber == true) || ((bool)$sNumber == true)){
                    return true;
                }else{
                    return false;
                }
                break;
            case 'xor':
                if(((bool)$fNumber == true) xor ((bool)$sNumber == true)){
                    return true;
                }else{
                    return false;
                }
                break;
        }
    }


    function discriminant($a, $b, $c){

        if($a == 0){
            return 'Переменная $a не может быть равна нулю';
        }
        $D = $b ** 2 - 4 * $a * $c;


        switch (true){
            case ($D > 0):
                $x1 = (bcsqrt($D,0) - $b )/ 2 * $a;
                $x2 = (-$b - bcsqrt($D,0))/ 2 * $a;
                return "У выражения два корня $x1 и $x2";
                break;
            case $D == 0:
                $x1 = -$b / 2 * $a;
                return "У выражения один корень $x1";
                break;
            case $D < 0:
                return "Квадратное уравнение не имеет корней";
                break;
        }

        /* Второй вариант решения через IF
             if($D > 0){
                 $x1 = (-$b + bcsqrt($D,0))/ 2 * $a;
                 $x2 = (-$b - bcsqrt($D,0))/ 2 * $a;
                 return "У выражения два корня $x1 и $x2";
             }elseif ($D == 0){
                 $x1 = -$b / 2 * $a;
                 return "У выражения один корень $x1";
             }else{
                 return "Квадратное уравнение не имеет корней";
             }
       */
    }


function nameCheck($name){

    if(!is_string($name)){
        return 'Имя должно быть строкой';
    }
    $name = trim($name);
    $fEnd = 'ей';
    $sEnd = 'ий';
    $tEnd = 'ав';

    switch (true){
        case mb_stripos($name, $fEnd, -2):
            return 'Мужской пол';
            break;
        case mb_stripos($name, $sEnd, -2):
            return 'Мужской пол';
            break;
        case mb_stripos($name, $tEnd, -2):
            return 'Мужской пол';
            break;
        default:
            return 'Пол определить не удалось';
            break;
    }
}