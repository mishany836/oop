<?php
class First// создали класс First
{
    // тело класса
    public  $hello = 'Paradise, hello '; //Свойство класса
    public $str = 'world! ';

   public function hello()//метод - это и есть функция созданная внутри класса
   {
       //echo 'Привет мир!';
       //Переменная $this- спец переменнная внутри класса,которая имеет ссылку на текущий класс
       // echo $this->str;
       $s = $this->str;
       $a = $this->hello;

       echo $a . $s;
   }
}
$obj = new First(); // Создали обьект First
//var_dump($obj);
// -> оператор доступа к свойствам и методам класса
 $obj->hello = 'Привет ';
 $obj->str = 'мир!';
$obj->hello();





















































