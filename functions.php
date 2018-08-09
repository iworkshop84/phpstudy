<?php

function calc ($perchislo, $vtorchislo, $oper){

    if((strlen($perchislo) == 0) or (strlen($vtorchislo) == 0 )){
        return 'Укажите оба числа';
    }
    $perchislo = (float)$perchislo;
    $vtorchislo = (float)$vtorchislo;

    switch ($oper){
        case '+':
            return $perchislo + $vtorchislo;
            break;
        case '-':
            return $perchislo - $vtorchislo;
            break;
        case '*':
            return $perchislo * $vtorchislo;
            break;
        case '/':
            if($vtorchislo == 0){
                return 'Деление на ноль!';
            }
            return $perchislo / $vtorchislo;
            break;
        case '%':
            return $perchislo % $vtorchislo;
            break;
        case '**':
            return $perchislo ** $vtorchislo;
            break;
    }

}