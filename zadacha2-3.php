<?php
class Worker
{
private $name, $age, $salary;

public function setName($name) {
$this->name = $name;
}
public function getName() {
return $this->name;
}
private function checkAge($age)
{
if ($age >= 1 && $age < 100) {
return $age = true;
} else {
return $age = false;
}
}

public function setAge($age) {
if ($this->checkAge($age)) {
$this->age = $age;
}
}
public function getAge() {
return $this->age;
}
public function setSalary($salary) {
$this->salary = $salary;
}
public function getSalary() {
return $this->salary;
}

public function NameSalary() {
echo('<br>Имя: ' . $this->getName() . ', Возраст: ' . $this->getAge());
}
}
$worker_one = new Worker;
$worker_one->setName('Иван');
$worker_one->setAge(25);
$worker_one->setSalary(1000);

$worker_two = new Worker;
$worker_two->setName('Вася');
$worker_two->setAge(26);
$worker_two->setSalary(2000);

$worker_one->NameSalary();
$worker_two->NameSalary();

$sumAge = $worker_one->getAge() + $worker_two->getAge();
$sumSalary = $worker_one->getSalary() + $worker_two->getSalary();
echo '<br><br>Сумма зарплат: ' . $sumSalary . '<br>';
echo 'Сумма возрастов: ' . $sumAge . '<br>';
?>