<?php


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

$mysql = new mysqli('localhost','root','','test');// подключаемся к базе создается обьект
    if ($mysql->connect_error) {
    die('Ошибка подключения (' . $mysql->connect_errno . ') '
        . $mysql->connect_error);
    }
$res = $mysql->query("SELECT * FROM `users`");// выполняет запрос , возвращает обьект
//$res->fetch_assoc(); //возвращает запись
//echo '<br>';
// возвращает запись
while($arRes = $res->fetch_assoc()){ // до тех пор пока не NULL
    echo '<pre>';
    print_r($arRes);
    echo '</pre>';
}

$user = new User($mysql,'Petya', '4563');
echo $user->update(13, ['login' => 'Kolya', 'password' =>'0987']);






