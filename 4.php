<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/15
 * Time: 8:38
 */

$array = [1,2,3,4,5,6];

print_r(day5($array));

function day5($array)
{
    $jishu = [];
    $oushu = [];
    foreach ($array as $k=>$v)
    {
       if($v%2 == 1){
           $jishu[] = $v;
       }else if($v%2 == 0){
           $oushu[] = $v;
       }
    }

    echo json_encode(array_merge($jishu,$oushu));
}