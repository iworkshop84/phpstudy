<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Второй урок - ДЗ</title>
</head>
<body>


<?php
include __DIR__ . '/functions.php';



echo '<h2>Задание 1</h2>';
echo '<hr><br />';
/*
Изучите понятие «рекурсия», составьте рекурсивную
функцию вычисления чисел Фибоначчи, проверьте ее
работу
 */


echo fibo(6);

echo '<h2>Задание 2</h2>';
echo '<hr><br />';
/*
Напишите функцию, которая вычисляет доход по
вкладу. В качестве аргумента принимается сумма
вклада, срок в месяцах, годовой процент.
Возвращается сумма вклада по окончанию срока.
 */

// Вариант для простых процентов.
echo prDohod(10000, 6, 15);
echo '<br/>';
// Вариант для сложных процентов
echo slDohod(50000, 6, 15);


echo '<h2>Задание 2</h2>';
echo '<hr><br />';

/*
Напишите функцию, которая принимает на вход два
аргумента – число (1..31) и номер месяца (1..12).
Возвращает правильно сформированную дату на
русском языке. Например: «1 января» или «9 мая»
 */



echo calendar(5,8);

?>


</body>
</html>