<?php


class Workerz2
{
    private $name;

    private $age;

    private $salary;

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }

    public function getAge()
    {
        return $this->age;
    }

    public function setAge($age)
    {
        if ($this->checkAge($age)) {
            $this->age = $age;
        }
    }

    private function checkAge($age)
    {
        if ($age < 100) {
            return true;
        } else {
            return false;
        }
    }

    public function getSalary()
    {
        return $this->salary;
    }

    public function setSalary($salary)
    {
        $this->salary = $salary;
    }


}

$Worker1 = new Workerz2;
$Worker1->setName('Иван');
$Worker1->setAge(25);
$Worker1->setSalary(1000);

$Worker2 = new Workerz2;
$Worker2->setName('Вася');
$Worker2->setAge(26);
$Worker2->setSalary(2000);

echo $Worker1->getSalary() + $Worker2->getSalary() . PHP_EOL;
echo $Worker1->getAge() + $Worker2->getAge() . PHP_EOL;

$Worker3 = new Workerz2;
$Worker3->setAge(30);
echo $Worker3->getAge() . PHP_EOL;