<?php


trait Hello
{

    public function run()
    {
        echo $this->show() . ' this is run';
    }
}