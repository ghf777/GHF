<?php

function num($num)
{
   if (!is_numeric($num)){
       return $num.'不是数字或数字字符串';
   }
   //判断能否被2整除
    while ($num%2 == 0){
       $num = $num/2;
    }
   //判断能否被3整除
    while ($num%3 == 0){
        $num = $num/3;
    }
   //判断能否被5整除
    while ($num%5 == 0){
        $num = $num/5;
    }
    if($num == 1){
        return $num.'是丑数';
    }else{
        return $num.'不是丑数';
    }
}

print_r(num(10));
echo '<br>';
print_r(num(7));
echo '<br>';
print_r(num('abc'));