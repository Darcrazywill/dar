<?php
class Worker
{
    public $name;
    public $age;
    public $salary;

    public function __construct($name, $age, $salary)
    {
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }
    
}

$firstWorker = new Worker("Миша", 32, 1500);
$secondWorker = new Worker("Маша", 20, 3500);

echo "имя: " . $firstWorker->name . ", возраст: " . $firstWorker->age . ", зарплата: " . $firstWorker->salary;
 
echo " имя: " . $secondWorker->name . ", возраст: " . $secondWorker->age . ", зарплата: " . $secondWorker->salary;

$sumAges = $firstWorker->age + $secondWorker->age;
$sumSalaries = $firstWorker->salary + $secondWorker->salary;
echo "<br>Сумма возрастов: " . $sumAges;
echo "<br>Сумма зарплат: " . $sumSalaries;

?> 

