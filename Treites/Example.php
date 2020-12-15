<?php


class Example
{
    use Hello;

    public function show()
    {
      return 'show';
    }

    public function __toString()
    {
       return 'Нельзя так делать!';
    }
public function __get()
{
  return 'error';
}

}