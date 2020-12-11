<?php


class Label extends Input
{
private $for;
public function __construct($background, $width, $height, $name, $value, $forObject)
{
  $this->setBackground($background);
  $this->setWidth($width);
  $this->setHeight($height);
  $this->setName($name);
  $this->setValue($value);
  $this->for = $forObject;

}

    /**
     * @return mixed
     */
    public function getParentName()
    {
        return $this->for;
    }
    public function setParentName($obj)
    {
        $this->for = $obj->getName();
    }
    public function convertToHTML()
    {

        $str = '';
        $str .= '<input type="" ';
        $str .= 'name="'.$this->getName().'" ';
        $str .= 'value="'.$this->getValue().'" ';
        $str .= 'style="background: '.$this->getBackground().'; height: '.$this->getHeight().'px" />';
        return $str;
    }
}












