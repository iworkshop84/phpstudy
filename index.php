<!doctype html>
<html lang="RU">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Четвёртый урок - ДЗ</title>
</head>
<body>


<?php
include __DIR__ . '/functions.php';

echo '<h2>Задание 1</h2>';
echo '<hr><br />';

/*
Создайте свой калькулятор. Он должен состоять из двух полей для ввода чисел, а между ними select для выбора операции.
По нажатию на кнопку "=" должно вычисляться значение.
 */

$operations = ['+', '-', '*', '/', '%', '**'];



if(!empty($_POST)){
    $res = calc($_POST['fnumber'], $_POST['snumber'], $_POST['operation']);
}
?>


<form action="/index.php" method="post">
    <fieldset>
        <legend>Калькулятор</legend>
        <p>
          <input type="text" name="fnumber" placeholder="Первое число" size="30px" value=
          "<?php
          if(isset($_POST['fnumber'])){
              echo $_POST['fnumber'];
          }
          ?>">
            <select name="operation">
                <?php foreach ($operations as $key=>$value): ?>
                <option
                    <?php
                    if(isset($_POST['operation']) && ($_POST['operation']) == $value){
                        echo 'selected';
                    }
                    ?>
                ><?= $value; ?></option>
                <?php endforeach; ?>
            </select>
            <input type="text" name="snumber" placeholder="Второе число" size="30px" value=
            "<?php
            if(isset($_POST['snumber'])){
                echo $_POST['snumber'];
            }
            ?>">
            <input type="submit" value="=">

            <?php
            if(isset($res)){
                echo $res;
            }
            ?>
        </p>
    </fieldset>

</form>



</body>
</html>