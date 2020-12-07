<?php
require_once 'Calculate.php';
require_once  'Point.php';
require_once  'Circle1.php';
require_once  'Rectangle1.php';


echo Calculate::divided(5,0);

//$arItems = [];

$arItems[] = new Circle1(2,4,50);
$arItems[] = new Circle1(2,4,10);
$arItems[] = new Rectangle1(2,4,100,50);

$total = 0;
foreach ($arItems as $item){
   $total += $item->area();

}

echo $total;
