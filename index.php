<?php
$arr = ['html', 'css', 'php', 'js', 'jq'];
foreach ($arr as $elem) {
    echo $elem.'<br>';
}

$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $elem) {
    $result += $elem;
}
echo $result.'<br>';

$arr = [1, 2, 3, 4, 5];
$result = 0;
foreach ($arr as $elem) {
    $result += $elem * $elem;
}
echo $result;

$arr = ['green'=>'зеленый', 'red'=>'красный','blue'=>'голубой'];
foreach ($arr as $key=>$elem) {
    echo $key.' - '.$elem.'<br>';
}

$arr = ['Коля'=>'200', 'Вася'=>'300','Петя'=>'400'];
foreach ($arr as $key=>$elem) {
    echo $key.' - зарплата '.$elem.' долларов<br>';
}

$i = 1;
while ($i <= 100) {
    echo $i.'<br>';
    $i++;
}

for ($i = 11; $i <= 33; $i++) {
    echo $i.'<br>';
}

for ($i = 0; $i <= 100; $i += 2) {
    echo $i.'<br>';
}

$sum = 0;
for ($i = 1; $i <= 100; $i++) {
    $sum += $i;
    echo $sum.'<br>';
}

$arr = [2, 5, 9, 15, 0, 4];
foreach ($arr as $elem) {
    if ($elem > 3 and $elem < 10) {
        echo $elem.'<br>';
    }
}

$sum = 0;
$arr = [8, -15, 6, 4, 7, -3];
foreach ($arr as $elem) {
    if ($elem > 0) {
        $sum += $elem;
    }
}
echo $sum.'<br>';

$arr = [1, 2, 5, 9, 4, 13, 4, 10];
foreach ($arr as $elem) {
    if ($elem == 4) {
        echo 'Есть!';
        break;
    }
}

$arr = ['10', '20', '30', '50', '235', '3000'];
foreach ($arr as $elem) {
    if ($elem[0] == '1' or $elem[0] == '2' or $elem[0] == '5') {
        echo $elem.'<br>';
    }
}

$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9];
$str = '';
foreach ($arr as $elem) {
    $str .= '-'.$elem;
}
echo $str.'-';

$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
foreach ($arr as $key=>$elem) {
    if ($key == 5 or $key == 6) {
        echo '<b>'.$elem.'</b><br>';
    } else {
        echo $elem.'<br>';
    }
}

$arr = ['пн', 'вт', 'ср', 'чт', 'пт', 'сб', 'вс'];
$day = 4;

foreach ($arr as $key=>$elem) {
    if ($key == $day) {
        echo '<i>'.$elem.'</i><br>';
    } else {
        echo $elem.'<br>';
    }
}

$arr = [];
for ($i = 1; $i <= 100; $i++) {
    $arr[] = $i;
}

var_dump($arr);

$arr = ['green'=>'зеленый', 'red'=>'красный', 'blue'=>'голубой'];
foreach ($arr as $key=>$elem) {
    $en[] = $key;
    $ru[] = $elem;
}

var_dump($en);
var_dump($ru);

$num = 1000;
$i = 0;
while ($num > 50) {
    $num /= 2;
    $i++;
}

echo $i.'<br>';
echo $num;

for ($num = 1000, $i = 0; $num > 50; $num /= 2, $i++);

echo $i.'<br>';
echo $num;