<?php
class Employee
{
   private $name;
   private $age;
   private $salary;

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }
    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age)
    {
        $this->age = $age;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }

    /**
     * @param mixed $salary
     */
    public function setSalary($salary)
    {
        $this->salary = $salary;
    }

    private function isCorrectAge($age)
    {
        if ($age >= 18 && $age <= 60) {
            return true;
        }else{
            return false;
        }
    }

}
$tip = new Employee;
$tip->setName('Mikhail');
$tip->setAge(40);
$tip->setSalary(1000);

$tip1 = new Employee;
$tip1->setName('Volodya');
$tip1->setAge(35);
$tip1->setSalary(800);

$tip2 = new Employee;
$tip2->setName('Gena');
$tip2->setAge(17);
$tip2->setSalary(200);

echo $tip->getName() . '<br/>';
echo $tip1->getName() . '<br/>';
echo $tip2->getName() . '<br/>';


$arr = [
    $tip,
    $tip1,
    $tip2
];
foreach ($arr as $ar){
    echo 'name: ' . $ar->getName() . ' age: ' . $ar->getAge() . ' salary: ' . $ar->getSalary() . '$' . '<br>';
}










