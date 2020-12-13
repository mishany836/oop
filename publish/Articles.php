<?php


class Articles extends Publication
{
public $nameWriter;
public function __construct($title, $description, $nameWriter)
{
    parent::__construct($title, $description);
    $this->title = $title;
    $this->description = $description;
    $this->nameWriter = $nameWriter;
}
public function show()
{
    echo  '<h1>' .$this->title . '</h1></br>';
    echo '<p>' .$this->description . '</p></br>';
    echo '<strong>' . $this->nameWriter . '</strong></br>';
}
}