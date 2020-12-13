<?php


class Announcements extends Publication
{
public $dateEnd;
public function __construct($title, $description, $dateEnd)
{
    parent::__construct($title, $description);
    $this->title = $title;
    $this->description = $description;
    $this->dateEnd = $dateEnd;
}
public function show()
{
    echo '<h1>' .$this->title . ' </h1></br>';
    echo '<p>' .$this->description . '</p></br>';
    echo '<span>' . $this->dateEnd . ' </span></br>';
}

}