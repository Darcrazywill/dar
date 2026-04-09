<?php
abstract class Figure
{
    private $field;
    private $color;
    private $countWays;

    abstract public function infoAbout($field, $color, $countWays)
    {}
}

interface Area
{
    public function getArea($field, $countWays);

}

class Rectangle extends Figure implements Area
{
    
}
class Triangle extends Figure implements Area
{
    
}
class Square extends Figure implements Area
{
    
}

?>
