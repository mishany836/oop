<?php

include_once 'publish\Publication.php';
include_once 'publish\News.php';
include_once 'publish\Articles.php';
include_once 'publish\Announcements.php';


function auto_load($class) //наша функция для автозагрузки
{

    $str = str_replace('\\','/', $class);// меняем слэши в пути
   // echo $str . '.php <br>';
    require_once  $str . '.php';
}

spl_autoload_register('auto_load');    //функция автозагрузки

use oop\publish\News;

$arNews = [];

$arNews [] = new \News('новости', 'Lorem Ipsum не случайная комбинация латинских слов. 
Впервые он был упомянут в одном из фрагментов классической латыни в 45 году нашей эры.
 Известный профессор латыни Ричард МакКлинток из колледжа Hampden-Sydney, штат Вирджиния, 
 по поиску самого странного слова «consectetur» в латинской литература, обнаружил первоисточник 
 Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"), 
 написанной Цицероном в 45 году н.э. Этот трактат был посвящен теории этики и имел популярность в эпоху Возрождения.', '12.12.2020');
$arNews [] = new \Articles('статья', 'Lorem Ipsum не случайная комбинация латинских слов.
 Впервые он был упомянут в одном из фрагментов классической латыни в 45 году нашей эры. Известный профессор латыни 
 Ричард МакКлинток из колледжа Hampden-Sydney, штат Вирджиния, по поиску самого странного слова «consectetur» в латинской литература,
  обнаружил первоисточник Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"),
   написанной Цицероном в 45 году н.э. Этот трактат был посвящен теории этики и имел популярность в эпоху Возрождения.', 'А.С.Пушкин');
$arNews [] = new \Announcements('обьявление', 'Lorem Ipsum не случайная комбинация латинских слов. 
Впервые он был упомянут в одном из фрагментов классической латыни в 45 году нашей эры. Известный профессор латыни Ричард МакКлинток из колледжа Hampden-Sydney,
 штат Вирджиния, по поиску самого странного слова «consectetur» в латинской литература, обнаружил первоисточник 
 Lorem Ipsum в разделах 1.10.32 и 1.10.33 книги "de Finibus Bonorum et Malorum" ("О пределах добра и зла"),
 написанной Цицероном в 45 году н.э. Этот трактат был посвящен теории этики и имел популярность в эпоху Возрождения.', '15.12.2020');

foreach ($arNews as $publish){
    $newses = $publish->show();
}

echo $newses. '<br/>';
