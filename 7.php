<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/21
 * Time: 8:41
 */
$array = [2,4,3,6,3,2,5,5];

function day7($array)
{
    $count = array_count_values($array);
    foreach ($count as $k=>$v)
    {
        if ($v == 1){
            $arr[] = $k;
        }
    }
    return $arr;
}
print_r(day7($array));