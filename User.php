<?php
/**
 * Created by PhpStorm.
 * User: SkillUP Student
 * Date: 14.11.2017
 * Time: 19:27
 */

class Worker
{

    public $name = '';

    public $age = '';

    public $salary = '';
}
    $Worker1 = new Worker;
    $Worker1->name = 'Иван';
    $Worker1->age = 25;
    $Worker1->salary = 1000;

$Worker2 = new Worker;
$Worker2->name = 'Вася';
$Worker2->age = 26;
$Worker2->salary = 2000;

echo $Worker1->salary + $Worker2->salary . PHP_EOL;
echo $Worker1->age + $Worker2->age . PHP_EOL;








 /*   public function __construct($firstName)
    {
        $this->firstName = $firstName;
    }
*/

