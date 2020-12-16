<?php
namespace country;

class Town
{
public $name;
public $foundation;
public $population;

    /**
     * Town constructor.
     * @param $name
     * @param $foundation
     * @param $population
     */
    public function __construct($name, $foundation, $population)
    {
        $this->name = $name;
        $this->foundation = $foundation;
        $this->population = $population;
    }



}