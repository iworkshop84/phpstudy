<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Второй урок</title>
</head>
<body>

<?php

    include_once __DIR__ . '/functions.php';

//1. Напишите программу, которая составит и выведет в браузер таблицу истинности
// ( https://ru.wikipedia.org/wiki/%D0%A2%D0%B0%D0%B1%D0%BB%D0%B8%D1%86%D0%B0_%D0%B8%D1%81%D1%82%D0%B8%D0%BD%D0%BD%D0%BE%D1%81%D1%82%D0%B8 )
// для логических операторов &&, || и xor.

?>

<table border="2" bgcolor="#f0f8ff">
    <caption>Таблица истинности для логических операторов</caption>
    <tr>
        <th>Первая переменная</th>
        <th>Вторая переменная</th>
        <th>Операция &&</th>
        <th>Операция ||</th>
        <th>Операция xor</th>
    </tr>
    <tr>
        <td> 0 </td>
        <td> 0 </td>
        <td><?= (int)TableTruth(false,false, '&&'); ?></td>
        <td><?= (int)TableTruth(false,false, '||'); ?></td>
        <td><?= (int)TableTruth(false,false, 'xor'); ?></td>
    </tr>
    <tr>
        <td> 1 </td>
        <td> 0 </td>
        <td><?= (int)TableTruth(true,false, '&&'); ?></td>
        <td><?= (int)TableTruth(true,false, '||'); ?></td>
        <td><?= (int)TableTruth(true,false, 'xor'); ?></td>
    </tr>
    <tr>
        <td> 0 </td>
        <td> 1 </td>
        <td><?= (int)TableTruth(false,true, '&&'); ?></td>
        <td><?= (int)TableTruth(false,true, '||'); ?></td>
        <td><?= (int)TableTruth(false,true, 'xor'); ?></td>
    </tr>
    <tr>
        <td> 1 </td>
        <td> 1 </td>
        <td><?= (int)TableTruth(true,true, '&&'); ?></td>
        <td><?= (int)TableTruth(true,true, '||'); ?></td>
        <td><?= (int)TableTruth(true,true, 'xor'); ?></td>
    </tr>
</table>

<?php

//2. Составьте функцию вычисления дискриминанта квадратного уравнения.
// Покройте ее тестами. Используя эту функцию, напишите программу, которая решает квадратное уравнение. Оформите красивый вывод решения.

echo '<br/><hr><br/>';
echo discriminant(1,1,-6);


//3. Проведите самостоятельное исследование на тему "Что возвращает оператор include, если его использовать как функцию?".
// Используйте руководство по языку, составьте и приложите примеры, иллюстрирующие ваше исследование.

// маразм крепчал - дебилы колосились. Каким хером можно использовать ЯЗЫКОВУЮ КОНСТРУКЦИЮ как ФУНКЦИЮ мне решительно не понятно.
// Использовать В функции - да, можно. Локальная видимость, работа только с переменными и константами функции и прочие ништяки.
// Совершенно утопическая ситуация не встречающаяся в реальной жизни.



//4*. Составьте функцию, которая на вход будет принимать имя человека, а возвращать его пол, пытаясь угадать по имени
// (null - если угадать не удалось). Вам придется самостоятельно найти нужные вам строковые функции. Начните с написания тестов для функции.

echo '<br/><hr><br/>';



echo nameCheck('Ярослав');

?>

</body>
</html>
