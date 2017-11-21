<?php

$time = new DateTime('yesterday 14:00');

echo $time->format('d.m.Y H:i:s'). '<br>';

$newTime = $time->sub(new DateInterval('P3DT5M'));
echo $newTime->format('d.m.Y H:i:s'). '<br>';

$birthDate = new DateTime('1992-12-23 02:00:00');
$age = $birthDate->diff(new DateTime());
echo $age->format('%Y лет %m месяцев %d дней');


