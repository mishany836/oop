<?php
require_once 'PointInterface.php';

class Circle1 extends Point implements PointInterface
{
    private $r; //radius
    public function __construct($x, $y ,$r)
    {
        parent::__construct($x, $y);
        $this->r =$r;
    }
public function show()
{
   echo 'r = ' . $this->r;
}
    public function area()
    {
        return PointInterface::PI * $this->r * $this->r;
    }
    public function perimeter()
    {
        return PointInterface::PI * 2 * $this->r;
    }
}