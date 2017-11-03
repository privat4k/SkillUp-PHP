<?php
$a = [];
    $a[1]='Mon';
    $a[2]='Tue';
    $a[3]='Wed';
    $a[4]='Thu';


foreach ($a as $key => $value){
    echo $key . ':' .$value . PHP_EOL;

}

foreach ($a as $value){
    echo $value . PHP_EOL;

}


/**
 * Created by PhpStorm.
 * User: SkillUP Student
 * Date: 03.11.2017
 * Time: 19:30
 */