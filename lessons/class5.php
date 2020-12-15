<?php
namespace My;
class Country
{
    public $arCountry = [];

    /**
     * @param array $arCountry
     */
    public function setCountry($c)
    {
        $this->arCountry[]= $c;
    }

    /**
     * @return array
     */
    public function getArCountry()
    {
        return $this->arCountry;
    }
}
$country = new Country();

echo '<pre>';
print_r($country->getArCountry());
echo '</pre>';

$country->setCountry('Беларусь');

echo '<pre>';
print_r($country->getArCountry());
echo '</pre>';


$country->arCountry('Аргентина');

echo '<pre>';
print_r($country->arCountry);
echo '</pre>';






















































