<?php
include 'Worker.php';

$pdo = new PDO('mysql:host=localhost;dbname=skillup;charset=utf8','root','');
$sql = 'SELECT * FROM workers WHERE salary =1000';
$sql1 = 'SELECT * FROM workers WHERE id =3';
$sql2 = 'SELECT * FROM workers WHERE age =23';
$sql3 = 'SELECT * FROM workers WHERE salary > 400';
$sql4 = 'SELECT * FROM workers WHERE salary >= 500';
$sql5 = 'SELECT * FROM workers WHERE salary != 500';
$sql6 = 'SELECT * FROM workers WHERE salary <= 900';
$sql7 = "SELECT salary FROM workers WHERE name = 'Вася'";
$sql71 = "SELECT age FROM workers WHERE name = 'Вася'";
$sql8 = 'SELECT * FROM workers WHERE age > 25 AND age <= 28';
$sql9 = "SELECT * FROM workers WHERE name = 'Петя'";
$sql10 = "SELECT * FROM workers WHERE name = 'Петя' OR name = 'Вася'";
$sql11 = "SELECT * FROM workers WHERE name != 'Петя'";
$sql12 = "SELECT * FROM workers WHERE age = 27 OR salary = 1000";
$sql13 = "SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR salary = 1000";
$sql14 = "SELECT * FROM workers WHERE (age >= 23 AND age < 27) OR (salary > 400 AND salary < 1000)";
$sql15 = "SELECT * FROM workers WHERE age = 27 OR salary != 400";

$sql16 = "INSERT INTO workers SET name='Никита', age=26, salary=300";




$result = $pdo->query($sql);
$result1 = $pdo->query($sql1);
$result2 = $pdo->query($sql2);
$result3 = $pdo->query($sql3);
$result4 = $pdo->query($sql4);
$result5 = $pdo->query($sql5);
$result6 = $pdo->query($sql6);
$result7 = $pdo->query($sql7);
$result71 = $pdo->query($sql71);
$result8 = $pdo->query($sql8);
$result9 = $pdo->query($sql9);
$result10 = $pdo->query($sql10);
$result11 = $pdo->query($sql11);
$result12 = $pdo->query($sql12);
$result13 = $pdo->query($sql13);
$result14 = $pdo->query($sql14);
$result15 = $pdo->query($sql15);
$result16 = $pdo->query($sql16);


while ($row =   $result->fetch()) {
    var_dump($row);
}
echo '<br>';
echo '2','<br>';

while ($row1 =   $result1->fetch()) {
    var_dump($row1);
}
echo '<br>';
echo '3','<br>';

while ($row2 =   $result2->fetch()) {
    var_dump($row2);
}
echo '<br>';
echo '4','<br>';

while ($row3 =   $result3->fetch()) {
    var_dump($row3);
}
echo '<br>';
echo '5','<br>';

while ($row4 =   $result4->fetch()) {
    var_dump($row4);
}
echo '<br>';
echo '6','<br>';

while ($row5 =   $result5->fetch()) {
    var_dump($row5);
}
echo '<br>';
echo '7','<br>';

while ($row6 =   $result6->fetch()) {
    var_dump($row6);
}
echo '<br>';
echo '8','<br>';

while ($row7 =   $result7->fetch()) {
    var_dump($row7);
}
echo '<br>';
echo '9','<br>';

while ($row71 =   $result71->fetch()) {
    var_dump($row71);
}
echo '<br>';
echo '10','<br>';

while ($row8 =   $result8->fetch()) {
    var_dump($row8);
}
echo '<br>';
echo '11','<br>';

while ($row9 =   $result9->fetch()) {
    var_dump($row9);
}
echo '<br>';
echo '12','<br>';

while ($row10 =   $result10->fetch()) {
    var_dump($row10);
}
echo '<br>';
echo '13','<br>';

while ($row11 =   $result11->fetch()) {
    var_dump($row11);
}
echo '<br>';
echo '14','<br>';

while ($row12 =   $result12->fetch()) {
    var_dump($row12);
}
echo '<br>';
echo '15','<br>';

while ($row13 =   $result13->fetch()) {
    var_dump($row13);
}
echo '<br>';
echo '16','<br>';

while ($row14 =   $result14->fetch()) {
    var_dump($row14);
}
echo '<br>';
echo '17','<br>';

while ($row15 =   $result15->fetch()) {
    var_dump($row15);
}
echo '<br>';
echo '<br>';



