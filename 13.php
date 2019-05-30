<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/30
 * Time: 8:44
 */

$n = 10;
print_r(day18($n));
function day18($n)
{
    $m = decbin($n);
    $k = substr_count($m,1);
    return $k;
}


