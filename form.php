<?php
session_start(); //стартуем сессию

//Если телефон есть в сессии - запишем его в переменную $phone:
if(!empty($_SESSION['email']))
    $email = $_SESSION['email'];
else
    $email = '';
?>

<form action="" method="GET">
    <input type="text" name="name">
    <input type="text" name="surname">

    <!-- Заполним атрибут value переменной $phone: -->
    <input type="email" name="email" value="<?php echo $email ?>">

    <input type="submit">
</form>

<?php

//Инициализируем сессию:
/*
    Переменная $_SESSION['counter'] будет нашим счетчиком.
    Если скрипт запускается первый раз -
    она будет пуста, присвоим ей единицу.
    Если не первый раз - тогда прибавим единицу.
*/
if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
    echo 'Вы еще не обновляли эту страницу';
} else {
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
    echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!';
}

//Выведем значение счетчика:

?>