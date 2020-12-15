<?php
require_once 'PointInterface.php';
 class Point
 {
     protected $x;
     protected $y;

     public function __construct($x, $y)
     {
         $this->x = $x;
         $this->y = $y;
     }

     public function show()
     {
         echo 'x = ' . $this->x . 'y = ' . $this->y;
     }
 }
// Абстрактным назавается класс в котором есть хоть один абстрактный метод
// Абстрактным называется метод который не имеет реализации и должен быть реализован в классе наследника
//Создавать обьект абстрактного класса нельзя












