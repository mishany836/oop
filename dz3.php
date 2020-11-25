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
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getSalary()
    {
        return $this->salary;
    }
}