<?php


class Worker_z5 extends User_z5
{
    private $salary;

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }
}

$worker1 = new Worker_z5;
$worker1->setName('Иван');
$worker1->setAge(25);
$worker1->setSalary(1000);

$worker2 = new Worker_z5;
$worker2->setName('Вася');
$worker2->setAge(26);
$worker2->setSalary(2000);

echo $Worker1->getSalary() + $Worker2->getSalary() . PHP_EOL;



