<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/31
 * Time: 8:46
 */
$arr = [1,2,3,4,5,6,7,8,9];
$n = 9;
print_r(day19($arr,$n));
//非递归
function day19($arr,$n)
{
    $m = array_keys($arr,$n);
    return $m;
}