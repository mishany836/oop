<?php


class Example
{
    use Hello; //Подключаем trait Hello

    public function show()
    {
       return 'show';
    }
    public function __toString()
    {
       return 'НЕльзя так делать';
    }
    public function __get()
    {
        return 'error';
    }
}