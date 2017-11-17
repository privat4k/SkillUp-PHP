<?php
define('USER_FILE', __DIR__ . '/subscribers.txt');
function processRequest (array $user) {
    foreach ($user as $field => $value) {
        $user[$field] = isset($_POST[$field]) ? $_POST[$field] : '';
    }
    return $user;
}
function validateUser (array $user) {
    $errors = [];
    if (!$user['email']) {
        $errors[] = 'Введите почту';
    }
    return $errors;
}
function saveUser2 (array $user){
    $file = fopen(USER_FILE, 'a');
    $user_info = implode("\t", $user) . PHP_EOL;
    fputs($file,$user_info);
    fclose($file);
}
