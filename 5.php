<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/16
 * Time: 8:38
 */

$n = 100;
$m = 1300;
print_r(calFn($n,$m));
function calFn($n,$m)
{
    $arr = [];
    for($i=$n;$i<=$m;$i++){
        $arr[] = substr_count($i,1);
    }
    return array_sum($arr);
}