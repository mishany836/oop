<?php
session_start();
//session_destroy();
use \country\Country;
use \country\Town;



function auto_load($class) //наша функция для автозагрузки
{
    $str = $_SERVER['DOCUMENT_ROOT'] . '/';
    $str = str_replace('\\', '/', $class);// меняем слэши в пути
    $str .= '.php';

    if (is_file($str)) {

        require_once $str;

    }

}

spl_autoload_register('auto_load');    //функция автозагрузки
$town = new Town('Витебск',974, 10000000);
$town2 = new Town('Могилев', 1431,7000000);
$town3 = new Town( 'Орша',974, 80000000);

$country = new Country ();
$country->addTown($town);
$country->addTown($town2);
$country->addTown($town3);

$country->getCountryList();

echo '<pre>';
print_r($_SESSION['country']);
echo '</pre>';