<?php
namespace classes\menu;

class Menu
{
protected $ListItems = [];

    /**
     * выводит меню на странице в соответствии с заданными параметрами
     * @param $width
     * @param $height
     * @param $backgroundColor
     * @param $color
     * @return mixed
     */
public function printMenu($width, $height, $bg, $color,$mr )
{
    $style = 'display: inline-block; text-align: center; ';
    $style .= 'width: ' .$width. 'px; ';
    $style .= 'height: ' .$height. 'px; ';
    $style .= 'margin-right: ' .$mr. 'px; ';
    $style .= 'background-color: ' .$bg. '; ';
    $style .= 'color: ' .$color. '; ';
    foreach ($this->ListItems as $objMenu) {
        echo '<a href="' . $objMenu->url . ' " style=" ' . $style . '"> ' . $objMenu->name . ' </a>';
    }

}

    /**
     * добавляет пункт меню в список
     * @param $name
     * @param $url
     */
public function addMenuItems($name, $url)
    {
        $this->ListItems[] = new MenuItem($name, $url);
    }

}