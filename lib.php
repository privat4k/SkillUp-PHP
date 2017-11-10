<?php

define('USERS_FILE', __DIR__ . '/users.txt');

function processRequest (array $user) {
    foreach ($user as $field => $value) {
        $user[$field] = isset($_POST[$field]) ? $_POST[$field]:'';
    }

    return $user;
}

function validateUser( array $user) {

    $errors = [];

        if (!$user['confirm']) {
            $errors[] = 'Вы должны согласиться!';
        }

        if (!$user['email']) {
            $errors[] = 'Введите email!';
        }

        if ($user['phone'] && !is_numeric($user['phone'])) {
            $errors[] = 'В номере телефона должны быть только цифры!';
        }

    return $errors;
}

function saveUser(array $user) {
    $existing_users = file_get_contents(USERS_FILE);
}