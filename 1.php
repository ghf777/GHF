<?php

$str = 'Have you ever gone shopping and';

$arr = [];

for ($i=1;$i<strlen($str);$i++){
    if(isset($arr[$str[$i]])){
        $arr[$str[$i]] += 1;
        if($arr[$str[$i]] == 3){
            echo '首先出现三次的那个英文字符是'.$str[$i];
            break;
        }
    }else{
        $arr[$str[$i]] = 1;
    }
}