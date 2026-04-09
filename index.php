<?php
abstract class Figure
{
    protected $field;
    protected $color;
    protected $countWays;

    abstract public function infoAbout():string;
}

interface Area
{
    public function getArea(): float;

}

class Rectangle extends Figure implements Area
{
        private float $a;
        private float $b;
        private const WAYS = 4;
        
        public function __construct(float $a, float $b, string $color = 'не задан')
    {
        $this->a = $a; $this->b = $b; 
        $this->color = $color;
        $this->countWays = self::WAYS;
    }        
        public function getArea():float
    {
       $this->field = $this->a * $this->b;
        return $this->field;
    }
    public function infoAbout(): string
    {
        return "Это класс прямоугольника. У него " . self::WAYS . " стороны. Цвет: {$this->color}.";
    }

}
class Triangle extends Figure implements Area
{
        private const WAYS = 3;
        private float $a;
        private float $b;
        private float $c;
        public function __construct(float $a, float $b, float $c, string $color = 'не задан')
    {
        $this->a = $a; $this->b = $b; $this->c = $c;
        $this->color = $color;
        $this->countWays = self::WAYS;
    }        
        public function getArea():float
    {
        $s = ($this->a + $this->b + $this->c) / 2;
        return sqrt($s * ($s - $this->a) * ($s - $this->b) * ($s - $this->c));
    }
         public function infoAbout(): string
    {
        return "Это класс треугольника. У него " . self::WAYS . " стороны. Цвет: {$this->color}.";
    }

}
class Square extends Figure implements Area
{
        private const WAYS = 4;
        private float $a;
        public function __construct(float $a, string $color = 'не задан')
    {
        $this->a = $a; 
        $this->color = $color;
        $this->countWays = self::WAYS;
    }  
       public function getArea(): float
    {
        $this->field = $this->a ** 2;
        return $this->field;
    }

    public function infoAbout(): string
    {
        return "Это класс квадрата. У него " . self::WAYS . " стороны. Цвет: {$this->color}.";
    }

}


$rect = new Rectangle(10, 7, 'красный');


$tri  = new Triangle(6, 8, 10, 'синий');


$sq = new Square(9, 'зелёный');

$figures = [$rect, $tri, $sq];

foreach ($figures as $figure) {
    echo $figure->infoAbout() . PHP_EOL;
    echo "  Площадь: " . $figure->getArea() . PHP_EOL;
    echo PHP_EOL;
}

?>
