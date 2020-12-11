<?php
include_once 'classes\menu\Menu.php';
include_once 'classes\menu\MenuItem.php';

use classes\menu\Menu;

$menu = new Menu();
 $menu->addMenuItems('Главная ','/');
 $menu->addMenuItems('О нас ','/about/');
 $menu->addMenuItems('Фото ','/photo');
 $menu->addMenuItems('Контакты ','/contacts/');
 $menu->addMenuItems('Войти ','/login/');

 $menu->printMenu(100,30,'red','black',15);



