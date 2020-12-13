<?php
include_once 'classes\menu\Menu.php';
include_once 'classes\menu\MenuItem.php';
include_once 'publish\Publication.php';
include_once 'publish\News.php';
include_once 'publish\Articles.php';
include_once 'publish\Announcements.php';

use publish\News;
use classes\menu\Menu;

$menu = new Menu();
 $menu->addMenuItems('Главная ','/');
 $menu->addMenuItems('О нас ','/about/');
 $menu->addMenuItems('Фото ','/photo');
 $menu->addMenuItems('Контакты ','/contacts/');
 $menu->addMenuItems('Войти ','/login/');

 $menu->printMenu(100,30,'red','black',15);



$news = new \News();
$article = new \Articles('обьявление','text', 'Пушкин');
$announcement = new \Announcements('статья','text', 13.18);
