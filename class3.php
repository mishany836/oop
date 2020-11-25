<?php
class Student
{
    //public $name;
    //public $course;
    private $name;
    private $course = 1;
/*
    function __construct($name, $course)
    {
        $this->name = $name;
        $this->course = $course;
    }
*/

    public function getName()
    {
        return $this->name;
    }


    public function getCourse()
    {
        return $this->course;
    }


    public function setCourse($course){
        if($this->isCorrectCourse($course)){
            $this->course = $course;
        }
    }

    public function setName($name)
    {
            $this->name = $name;
        }


private function isCorrectCourse($course)
{
    if ($course >= 1 && $course <= 5) {
        return true;
        }else{
         return false;
        }
    }

}
$std = new Student;
$std->setName('Vasya');
$std->setCourse(3);

$std2 = new Student();
$std2->setName('Petya');
$std2->setCourse(9);
$arr = [
    $std,
    $std2
];
// echo '<pre>';
//var_dump($arr);
 //echo '</pre>';

 foreach ($arr as $ar){
     echo 'name: ' . $ar->getName() . ' course: ' . $ar->getCourse() . '<br>';
 }
// инкапсуляция - свойство системы позволяющее обьеденить методы и данные работающие с ними, а также скрыть детали реализации от пользователя

















