<?php
class Helper
{
    private $sum = [];

    /**
     * @return array
     */
    public function getSum()
    {
      return array_sum($this->sumAr);
    }
    public function setSum($s)
    {
        if (is_int($s)) {
            $this->sumAr[] = $s;
        }
    }
}
$helper = new Helper();
$helper->sumAr[] = 22;
$helper->sumAr[]= 45;

 $helper->getSum();






