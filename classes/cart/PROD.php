<?php
//session_start();
//session_destroy();
function auto_load($class) //наша функция для автозагрузки
{
$str = $_SERVER['DOCUMENT_ROOT'] . '/';
    $str = str_replace('\\','/', $class);// меняем слэши в пути
    $str .=  '.php';

    if (is_file($str)){

        require_once  $str;

    }


}
spl_autoload_register('auto_load');    //функция автозагрузки

//$prod1 = new \classes\cart\Product('apple',100,1);
//$prod2 = new \classes\cart\Product('peach',200,4);
//$prod3 = new \classes\cart\Product('potato',500,5);

$cart = new \classes\cart\Cart();
$cart->addToCart($prod1);
$cart->addToCart($prod2);
$cart->addToCart($prod3);

$cart->getCart();

//echo '<pre>';
//print_r($_SESSION['cart']);
//echo '</pre>';