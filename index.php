<form action="" method="GET">
    <input type="email" name="email">
    <input type="submit">
</form>

<?php
//Если форма была отправлена и телефон не пустой:
if (!empty($_REQUEST['email'])) {
    session_start(); //стартуем сессию
    $_SESSION['email'] = $_REQUEST['email']; //пишем телефон в сессию
}
?>



