<?php
// Абстрактным назавается класс в котором есть хоть один абстрактный метод
// Абстрактным называется метод который не имеет реализации и должен реализован в классе наследника
//Создавать обьект абстрактного класса нельзя




abstract class Point
{
protected $x;
protected $y;
public function __construct($x,$y)
{
    $this->x = $x;
    $this->y = $y;
}
    public function show()
    {
        echo 'x = ' . $this->x . 'y = ' . $this->y;
    }
    abstract public function area();
    //{
       // return 0;
    //}
   abstract public function perimeter();
   // {
       // return 0;
    //}
}