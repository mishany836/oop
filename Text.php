<?php


class Text extends Input
{
private $placeholder;
public function __construct($background, $width, $height, $name, $value, $placeholder)
{
    $this->setBackground($background);
    $this->setWidth($width);
    $this->setHeight($height);
    $this->setName($name);
    $this->setValue($value);
    $this->placeholder = $placeholder;
}

    /**
     * @return mixed
     */
    public function getPlaceholder()
    {
        return $this->placeholder;
    }

    /**
     * @param mixed $placeholder
     */
    public function setPlaceholder($placeholder)
    {
        $this->placeholder = $placeholder;
    }
   public function convertToHTML()
   {
      $str = '';
      $str .= '<input type="text" ';
      $str .= 'name="'.$this->getName().'" ';
      $str .= 'value="'.$this->getValue().'" ';
      $str .= 'placeholder="'.$this->getPlaceholder().'" ';
      $str .= 'style="background: '.$this->getBackground().'; width: '.$this->getWidth().'px; height: '.$this->getHeight().'px" />';
   return $str;
   }
}










