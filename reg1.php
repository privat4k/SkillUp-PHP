<?php

$str2 = 'aba aca aea abba adca abea';
$res2 = preg_replace('#a..a#', '!', $str2);
echo $res2 . '<br>';

$str5 = 'aba aca aea abba adca abea';
$res5 = preg_replace('#ab*a#', '!', $str5);
echo $res5 . '<br>';

$str9 = '2+3 223 2223';
$res9 = preg_replace('#2\+3#', '!', $str9);
echo $res9 . '<br>';

$str14 = 'aba accca azzza wwwwa';
$res14 = preg_replace('#a.+?a#', '!', $str14);
echo $res14;

