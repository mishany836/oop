<?php


class MenuItem
{
public $name = 'name';
public $URL = 'URL';
public function __construct($name, $URL)
{
    $this->name = $name;
    $this->URL = $URL;
}
}
$menu = new MenuItem();