<?php
class User
{
    private $name;
    private $age; // private - Свойства и методы доступные среди класса

   // function __construct($n, $a)// спец метод автоматически вызывается при создании нового обьекта
    //{
    //$this->age = $a;
    // $this->name = $n;
   // }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }
    /**
     * @return mixed
     */
    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        if($age > 18 && $age < 60){
            $this->age = $age;
        }
    }

    /**
     * устонавливает возраст
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

}
$man = new User('Vasya ', '18 ');
$man->setAge(25);
$man->setName('Петя');

echo  'My name is ' . $man->getName() . " age " . $man->getAge()  . 'yeas old';





















