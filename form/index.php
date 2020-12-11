
    <?php

    require_once 'Control.php';
    require_once 'Input.php';
    require_once 'Button.php';
    require_once 'Text.php';
    require_once 'Select.php';
    require_once 'Label.php';
    require_once 'Radio.php';
    require_once 'Checkbox.php';


    /**
     * Формирует тег <input> на основе данных обьекта
     * @param $object
     * @return string
     */



    $control = new Control();



    $object = new Button('pink',100,30,'submit','Отправить','true');
    echo $object->convertToHTML(). '<br/>';
    $text = new Text('',100,30,$text,'','Введите текст');
    echo $text->convertToHTML(). '<br/>';
    $select = new Select('',120,20,'sel',[1,2,3]);
    echo $select->convertToHTML(). '<br/>';
    $radio = new Radio('red',15,15,'',2,'true');
    echo $radio->convertToHTML(). '<br/>';
    $check = new Checkbox('red',15,15,'',2,'true');
    echo $check->convertToHTML();











































