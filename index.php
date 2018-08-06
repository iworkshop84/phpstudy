<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Третий урок - ДЗ</title>
</head>
<body>


<?php
include __DIR__ . '/functions.php';

echo '<h2>Задание 1</h2>';
echo '<hr><br />';

/*
С помощью цикла while выведите все числа от 1 до 100 нацело делящиеся на 3
*/

$i = 1;

while ($i < 100){
  if (0 == $i % 3){
      echo $i . '<br />';
  }
    $i++;
}

echo '<h2>Задание 2</h2>';
echo '<hr><br />';
/*
Напишите функцию которая создаст массив из n случайных чисел и возвращает его в отсортированном
по убыванию порядке
 */

function arrSort($n){

    $i = 1;
    while ($i <= $n){
       $nArray[] = random_int(-1000000,1000000);
       $i++;
    }
    rsort($nArray);
    return $nArray;
}

var_dump(arrSort(10));


echo '<h2>Задание 3</h2>';
echo '<hr><br />';

/*
Создайте массив в котором ключи  - названия регионов, значения  - массивы городов входящих в этот регион.
Выведите на экран примерно в таком виде
Московская область
- Москва
- Реутов
Ярославская область
- Ярославль
- Рыбинск
 */

$arrReg  = ['Московская область' => ['Москва', 'Реутов', 'Балашиха', 'Домодедово'],
            'Ярославская область' => ['Ярославль', 'Рыбинск', 'Тутаев'],
            'Челябинская область' => ['Челябинск', 'Аша', 'Златоуст']];


//var_dump($arrReg);


foreach ($arrReg as $key=>$val){
    echo '<ul>' . $key . '</ul>';
    if(is_array($val)){
        foreach ($val as $key1=>$val1){
            echo '<li type="circle">' . $val1 . '</li>';
        }
    }
}

echo '<h2>Задание 3 - вариант 2</h2>';
echo '<hr><br />';
?>

<?php foreach ($arrReg as $key=>$val): ?>
  <?= '<ul>' . $key . '</ul>'; ?>
    <?php if(is_array($val)): ?>
        <?php foreach ($val as $key1=>$val1): ?>
            <?= '<li type="circle">' . $val1 . '</li>'; ?>
        <?php endforeach;?>
    <?php endif;?>
<?php endforeach; ?>


</body>
</html>