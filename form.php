<?php
session_start();

if(!empty($_SESSION['email']))
    $email = $_SESSION['email'];
else
    $email = '';
?>

<form action="" method="GET">
    <input type="text" name="name">
    <input type="text" name="surname">


    <input type="email" name="email" value="<?php echo $email ?>">

    <input type="submit">
</form>

<?php


if (!isset($_SESSION['counter'])) {
    $_SESSION['counter'] = 0;
    echo 'Вы еще не обновляли эту страницу';
} else {
    $_SESSION['counter'] = $_SESSION['counter'] + 1;
    echo 'Вы обновили эту страницу '.$_SESSION['counter'].' раз!';
}


?>