<?php
class Student
{
    public $name;
    public $course;

    function __construct($name, $course)
    {
        $this->name = $name;
        $this->course = $course;
    }
}
$std = new Student('Vasya', 1);
$std2 = new Student('Petya', 2);

$arr = [
    $std,
    $std2
];
// echo '<pre>';
//var_dump($arr);
 //echo '</pre>';

 foreach ($arr as $ar){
     echo 'name: ' . $ar->name . ' course: ' . $ar->course . '<br>';
 }


















