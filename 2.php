<?php
/**
 * Created by PhpStorm.
 * User: 风尘
 * Date: 2019/5/12
 * Time: 19:23
 */

$data = [80,90,88,99];
//平均数
$num = array_sum($data)/count($data);
echo'平均数'.$num;
echo '<br>';
//最大
echo '最大'.max($data);
echo '<br>';
//最小
echo '最小'.min($data);
echo '<br>';

//for循环
for($i=1;$i<=9;$i++){
    for($j=1;$j<=$i;$j++){
       echo "{$i}*{$j} =".($i*$j)." ";
    }
    echo '<br>';
}

echo '<br>';
//while循环
$j = 1;
while($j<=9){
    $i = 1;
    while($i<=$j){
        echo "{$i}x{$j}=".($i*$j)." ";
        $i++;
    }
    $j++;
    echo "<br />";
}

echo '<br>';
//do while
$j = 1;
do {
    $i = 1;
    do {
        echo "{$i}x{$j}=".($i*$j)." ";
        $i++;
    } while($i<=$j);
    echo "<br />";
    $j++;
} while($j<=9);
