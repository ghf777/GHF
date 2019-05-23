<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/23
 * Time: 8:41
 */

print_r(day12(3));
function day12($n)
{
    $arr= range(1,$n);
    $sum = array_sum($arr);
    return $sum;
}
