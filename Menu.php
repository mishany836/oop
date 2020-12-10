<?php


class Menu
{
public $ListItems = [];

public function PrintMenu($width, $height, $backgroundColor, $color )
    {

        return $this->PrintMenu($width,$height,$backgroundColor,$color);
    }
public function AddMenuItem($name, $URL)
    {
        $this->name = $name;
        $this->URL =$URL;
    }
}