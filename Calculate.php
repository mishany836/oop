<?php


class calculate
{
    private static $r = 0;
    public static function plus($a, $b)
    {
        self::$r;
        return $a + $b;
    }
     public static function minus($a, $b)
    {
    return $a - $b;
    }
    public static function times($a, $b)
    {
       return $a * $b;
    }
    public static function divided($a, $b)
    {
        if ($b == 0) {

        return 'На ноль делить нельзя';
    }else{
            return $a / $b;
        }


    }



}
















































