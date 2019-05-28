<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/28
 * Time: 8:45
 */
$array=[[1,2,8,9],[2,4,9,12],[4,7,10,13],[6,8,11,15]];
$arr = array_merge($array[0],$array[1],$array[2],$array[3]);
$num = 7;
function day16($num,$arr)
{
    if(in_array('$num',$arr)){
        return true;
    }else{
        return false;
    }
}
