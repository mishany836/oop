<?php


abstract class Publication
{
    protected $title;
    protected $description;
    public function __construct($title, $description)
    {
        $this->title = $title;
        $this->description = $description;
    }

abstract public function show();

}