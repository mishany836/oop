<?php
class Parents
{
    // protected - свойство и методы доступны из текущего класса и класса наследников.
   public $prop; // наследование - создание класса потомков на основе классса родителя  с целью расширения свойств и методов родителя
protected $x;
protected $y;
    public function __construct($pr,$x,$y)
    {
       if(is_null($this->prop )) {// Только если  NULL
           $this->prop = $pr;
           $this->x = $x;
           $this->y = $y;
       }
    }


    public function show()
    {
        return 'Hello';
    }

}




class Child extends  Parents // класс потомок создается  extends
{
    public $z;
    public function __construct($pr, $x, $y, $z)
    {//Если у родительского класса есть конструктор с параметрами то в производном
        // классе нужно тоже создать конструктор с параметрами и число параметров
        //  в этом коконструкторе  количества родительского класса и числа параметров
        // не обходимого  для производного класса
        parent::__construct($pr, $x, $y);
        $this->z = $z;
    }

    /**
 * @return string
 */public function getProp()
{
    return $this->prop;
}
public function Show()
{
    return parent::show();
}
}


$obj = new Child(123, 1, 2,3);
//echo $obj->getParentShow();

echo $obj->show();
//Если не используется автозагрузка классы должны быть обьявлены до того как они будут использоваться.
//Если класс расширяет другой то родительский класс должен быть обьявлен до наследующего