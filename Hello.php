<?php


trait Hello
{
public function __construct()
    {
    echo 'Hello trait';
    }
    public function run()
    {
        echo $this->show() .'this is run';
    }
}