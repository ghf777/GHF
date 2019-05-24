<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/24
 * Time: 8:40
 */

var_dump(day13(8,2));

function day13($n,$m)
{
    if(is_int($n) & is_int($m)){
        $arr = [$n,$m];
        $sum = array_sum($arr);
        return $sum;
    }else{
        echo '必须是整数';
    }

}