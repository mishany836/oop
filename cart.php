<?php
session_start();

function auto_load($class) //наша функция для автозагрузки
{
    $str = $_SERVER['DOCUMENT_ROOT'] . '/';
    $str = str_replace('\\', '/', $class);// меняем слэши в пути
    $str .= '.php';

    if (is_file($str)) {

        require_once $str;

    }


}
spl_autoload_register('auto_load');
$cart = new \classes\cart\Cart();



//echo '<pre>';
//print_r($_SESSION['cart']);
//echo '</pre>';
$cart->getCart();

