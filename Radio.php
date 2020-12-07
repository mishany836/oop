<?php


class Radio extends Input
{
    private $isChecked;
    public function __construct($background, $width, $height, $name, $value, $isChecked)
    {
    $this->setBackground($background);
    $this->setWidth($width);
    $this->setHeight($height);
    $this->setName($name);
    $this->setValue($value);
    $this->isChecked = $isChecked;
    }
    public function getCheckedState()
    {
       return $this->isChecked;
    }
    public function setCheckedState($isChecked = true)
    {
        $this->isChecked = $isChecked;
    }
    public function convertToHTML()
    {
        $type = $this->isChecked ? 'radio' : 'radio';
        $str = '';
        $str .= '<input type="'.$type.'" ';
        $str .= 'name="'.$this->getName().'" ';
        $str .= 'style="background: '.$this->getBackground().'; width: '.$this->getWidth().'px  height: '.$this->getHeight().'px" />';
        return $str;
    }
}