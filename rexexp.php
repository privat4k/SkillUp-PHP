<?php

$str = 'dhpsdgpl <lewt> test@-email.com.ua lwetwv <ewtkwel> wet test@email.com g dgdfhgjgfdkghk';
$res = preg_match_all('/[\w-\.]{1,}@[-a-zA-z0-9]+(\.[\w-]+)+/m', $str, $match);

echo $res ? 'Найдено' : 'Не найдено';
var_dump($match);

$replaced = preg_replace('/(\.[\w-]+)+/', '.info', $str);
echo $replaced . '<br>';
$replaced = preg_replace('/<(.*)>/iuU', '($1)', $str);
echo $replaced;

