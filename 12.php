<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/29
 * Time: 8:42
 */
$arr_A=[1,3,6,9];
$arr_B=[2,4,5,8,20];

var_dump(day17($arr_A,$arr_B));

$merge = [];
function day17($arr_A,$arr_B)
{
    foreach ($arr_A as $k=>$v){
        $merge[]= $v;
    }
    foreach ($arr_B as $k=>$v){
        $merge[]= $v;
    }

    for ($i=1;$i<=count(sort($merge));$i++){
        $arr = $merge;
    }
     return $arr;
}