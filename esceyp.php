<?php

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

class MyException extends  Exception
{

}

try { //Птается выполнить код

    $x = 0;
    if ($x === 0){

       throw new MyException('Делить на ноль нельзя '); // Выбрасывает исключения прекращается выполнение блока
    }
    echo 1/$x;

}catch (MyException $e){
    echo $e->getMessage();
}finally{
    echo 123 ;  // сработает даже если было исключение
}



