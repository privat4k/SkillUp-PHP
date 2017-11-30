<?php

$str5 = 'a1a a22a a333a a4444a a55555a aba aca';
$res5 = preg_replace('#a\d+a#', '!', $str5);
echo $res5 . '<br>';

$str8 = 'ave a#b a2b a$b a4b a5b a-b acb';
$res8 = preg_replace('#a\Wb#', '!', $str8);
echo $res8 . '<br>';

$str19 = 'aAXa aeffa aGha aza ax23a a3sSa';
$res19 = preg_replace('#a[a-zA-Z]+a#', '!', $str19);
echo $res19;


