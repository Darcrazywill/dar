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
    private function checkAge($age)
    {
        if ($age>=18)
        {   
            $this->age = $age;
            echo "<br>Возраст был изменен"; 
        }
        else 
        {
             echo "<br>Вам еще рано с нами работать";
        }
    }
    public function getAge() //нужно так как поле приватное
    {
        return $this->age;
    }
    public function setAge($newAge)
    {   
        
            $this->checkAge($newAge);
       
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
//echo "<br>Сумма возрастов: " . $sumAges;
echo "<br>Сумма зарплат: " . $sumSalaries;
echo "<br>GetName(firstWorker): " . $firstWorker->getName();
//echo "<br>GetAge(secondWorker): " . $secondWorker->getAge();
//echo "<br>GetSalary(firstWorker): " . $firstWorker->getSalary();
echo "<br>Сумма зарплат: " . $firstWorker->getSalary($secondWorker);
//$secondWorker->setAge(9);
//echo "<br>" . $firstWorker->checkAge();
//echo "<br>" . $firstWorker->setAge(20);
$secondWorker->setAge(9);
$firstWorker->setAge(20);
echo "<br>Возраст первого работника: " . $firstWorker->getAge();
echo "<br>Возраст второго работника: " . $secondWorker->getAge();

?> 

