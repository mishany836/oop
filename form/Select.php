<?php


class Select extends Control
{
private $arItem = [];
private $name;
public function __construct($background, $width, $height,$name, $items = [])
{
$this->setBackground($background);
$this->setWidth($width);
$this->setHeight($height);
$this->name = $name;
$this->arItem = $items;
}
    public function convertToHTML()
    {
  //      <select name="" style="">
  //          <option>1</option>
  //          <option>2</option>
  //          <option>3</option>
  //        </select>


        $str = '';
        $str .= '<select ';
        $str .= 'name="'.$this->name.'" ';
        $str .= 'style="background: '.$this->getBackground().'; width: '.$this->getWidth().'px" height: '.$this->getHeight().'px" />';
    foreach ($this->arItem as $item){
        $str .= '<option>'.$item.'</option>';
    }

        $str .= '</select>';
        return $str;
    }
}