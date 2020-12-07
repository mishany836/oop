<?php


class Rectangle1 extends Point
{
private $w;//ширина
private $h;//высота
    public function __construct($x, $y , $w, $h)
    {
        parent::__construct($x, $y);
        $this->w = $w;
        $this->h = $h;
    }
    public function show()
    {
   echo  'h = ' . $this->h . 'w = ' . $this->w;
    }
    public function area()
    {
        return $this->w * $this->h;
    }
    public function perimeter()
    {
        return ($this->w + $this->h) * 2;
    }
}