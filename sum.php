<?php
// 課題１
function multiple_number($number){
    return $number*2;
}
echo "課題1:";
echo multiple_number(10);
echo "\n";

// 課題２
function add($a,$b){
    $sum=$a+$b;
    return $sum;
}
echo "課題2:";
echo add(100, 200);
echo "\n";

// 課題３
function kadai3($arr){
    $result = 1;
    foreach ($arr as $a){
        $result *= $a;
    }
    return $result;
}

echo "課題3:";
$arr = [1,3,5,7,9];
echo kadai3($arr);
echo "\n";
//配列1，３，５，７，９，を用いて実行する

//課題４
function max_array($arr){
    $max_number = $arr[0];
    foreach ($arr as $a){
       $max_number = $a;
    }
    return $max_number;
}
$arr = [1,45,88,100,150];
echo "課題4:";
echo max_array($arr);
echo "\n";

//課題5
//strip_tags
echo "strip_tags";

$a = "test";
$a = strip_tags($a);
echo ($a);
echo "\n";

//array_push
echo "array_push:";

$a = array("orange","banana");
array_push($a,"apple","strawberry");

print_r ($a);
echo "\n";


//array_merge
echo "array_merge:";

$array1 = [1,2,3];
$array2 = [10,20,30];
$array = array_merge($array1,$array2);

print_r ($array);
echo "\n";

//time,mktime
echo "time,mktime:";

$time = mktime (0,0,0,11,29,2022);
echo $time;
echo "\n";

//date
echo date('Y年,m月,d日　H時,i分,s秒');
echo "\n";
