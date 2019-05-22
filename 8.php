<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/22
 * Time: 8:39
 */
$str = 'student a am I';
print_r(day11($str));
function day11($str)
{
    $arr = explode(' ',$str);
    $array = array_reverse ($arr);

    $str = implode(' ',$array);
    return $str;
}