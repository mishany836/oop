<?php
require_once 'PointInterface.php';
require_once 'Point.php';
require_once 'Circle1.php';
require_once 'Calculate.php';
require_once 'Rectangle1.php';
require_once 'app/User.php';
require_once 'User.php';



$user = new My\User();
$user1 = new User();

$c = new Circle1(2,4,20);
echo $c->area() . '<br/>';


echo Calculate::divided(5,5) .'<br/>';

$arItems = [];

$arItems[] = new Circle1(2,4,50);
$arItems[] = new Circle1(2,4,10);
$arItems[] = new Rectangle1(2,4,100,50);

$total = 0;
foreach ($arItems as $item){
   $total += $item->area();

}

echo $total. '<br/>';
