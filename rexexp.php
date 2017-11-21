<?php

$str = 'dhpsdgpl lewt test@email.com lwetwv ewtkwel wet g dgdfhgjgfdkghk';
$res = preg_match('/\w+@/',$str, $match);

echo $res ? 'Найдено' : 'Не найдено';
var_dump($match);

