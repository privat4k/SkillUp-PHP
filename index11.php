<?php
include 'lib11.php';
$user = [
    'email' => ''
];
$errors = [];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user = processRequest ($user);
    $errors = validateUser ($user);
    if (!$errors) {
        saveUser2($user);
        header('Location: /success11.html');
        exit();
    }
}

include 'formsubs.php';

