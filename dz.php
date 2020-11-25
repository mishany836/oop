<?php
class Car
{
   public $color = 'КРАСНЫЙ';
   public $model = 'TOYOTA';

   public function show()
   {
       $c = $this->model;
       $d = $this->color;

       echo 'Модель транспортного средства ' . $c . ' - '. 'Цвет ' . $d ;
   }
}
$obj = new Car();
$obj->show();

$avto = new Car();
$avto->color = 'Зеленый';
$avto->model = 'HONDA';



    echo ' : ' . 'Модель транспортного средства ' . $avto->model . ' - '. 'Цвет ' . $avto->color;
