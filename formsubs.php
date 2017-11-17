<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Форма</title>
</head>
<body>
<?php foreach ($errors as $error) { ?>
    <p class = 'error' style="color: red"><?= $error ?></p>
<?php } ?>

<form action = 'index11.php' method="post">
    <label> Email <input type = 'email' name = 'email' value="<?= $user['email'] ?>"> </label>
    <button type = "submit"> Сохранить</button>
</form>

<a href="base.php"> Список email'ов </a>
</body>
</html>

