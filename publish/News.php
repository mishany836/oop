<?php


class News extends Publication
{
public $date;
public function __construct($title, $description, $date)
{
    parent::__construct($title, $description);
    $this->title = $title;
    $this->description = $description;
    $this->date = $date;
}

    public function show()
{
    echo  '<h1>' .$this->title . ' </h1></br>';
    echo '<p>' .$this->description . '</p></br>';
    echo '<span>' . "дата выхода публикации : ". $this->date . ' </span></br>';
}

}