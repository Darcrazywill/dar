<?php
class Worker
{
    public $name;
    private $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    public function getName()
    {
        return $this->name;
    }
    public function setAge($newAge)
    {
        $this->age = $newAge;
    }
    
    public function getSalary($worker)
    {
        return $this->salary+$worker->salary;
    }
}

$firstWorker = new Worker("Миша", 32, 1500);
$secondWorker = new Worker("Маша", 20, 3500);

//echo "имя: " . $firstWorker->name . ", возраст: " . $firstWorker->age . ", зарплата: " . $firstWorker->salary;
// 
//echo " имя: " . $secondWorker->name . ", возраст: " . $secondWorker->age . ", зарплата: " . $secondWorker->salary;

//$sumAges = $firstWorker->age + $secondWorker->age;
$sumSalaries = $firstWorker->salary + $secondWorker->salary;
echo "<br>Сумма возрастов: " . $sumAges;
echo "<br>Сумма зарплат: " . $sumSalaries;
echo "<br>GetName(firstWorker): " . $firstWorker->getName();
//echo "<br>GetAge(secondWorker): " . $secondWorker->getAge();
//echo "<br>GetSalary(firstWorker): " . $firstWorker->getSalary();
echo "<br>Сумма зарплат: " . $firstWorker->getSalary($secondWorker);
$secondWorker->setAge(8);
echo "<br>Возраст второго работника изменен методом setAge.";
?> 

