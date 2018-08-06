<?php


function fibo($n){
    if($n < 2){
        return $n;
    }
    return fibo($n - 1) + fibo($n - 2);
}

function prDohod($summ, $srok, $proc){

    $srokDay = ($srok * 30) + (int)($srok / 2);

    $sumProc = ($summ * ($proc / 100) * ($srokDay - 1)) / 365;
    return round($summ + $sumProc, 3);

}

function slDohod($summ, $srok, $proc){

    $monthProc = ($proc / 100) / 12;
    $sumProc = $summ * pow((1 + $monthProc), $srok);
    return round($sumProc, 3);
}


function calendar($day, $month){
    $day = (int)$day;
    $month = (int)$month;
    if(($day > 31) || ($day < 1)){
        return 'Сегодня не пятница, хватит пить, такого дня быть не может!';
    }elseif (($month > 12) || ($month < 1)){
        return 'Сегодня не пятница, хватит пить, такого месяца не бывает!';
    }

    switch ($month){
        case 1:
            return $day . ' января';
            break;
        case 2:
            return $day . ' февраля';
            break;
        case 3:
            return $day . ' марта';
            break;
        case 4:
            return $day . ' апреля';
            break;
        case 5:
            return $day . ' мая';
            break;
        case 6:
            return $day . ' июня';
            break;
        case 7:
            return $day . ' июля';
            break;
        case 8:
            return $day . ' августа';
            break;
        case 9:
            return $day . ' сентября';
            break;
        case 10:
            return $day . ' октября';
            break;
        case 11:
            return $day . ' ноября';
            break;
        case 12:
            return $day . ' декабря';
            break;
    }

}