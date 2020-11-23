<?php
class Car
{
    private $type;

    public function  __construct($t)
    {
        $this->type = $t;
    }

    /**
     * @return mixed
     */
    public function getCategory()
    {
       if($this->type == 1)
       {
          return'B';
       }elseif ($this->type == 2){
           return'C';
       }else{
           return 'Вы указали не верный тип';
       }
    }
}
$obj = new Car(2);
//var_dump($obj);
echo  'Права категории ' . $obj->getCategory();























