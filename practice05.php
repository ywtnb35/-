<?php
$name ="watanabe";
if ($name ="渡辺"){
    echo "私は渡辺です";
}
else{
    echo "私は渡辺ではありません";
}

$total =10000;
echo $total;
for ($i = 0; $i <= 10000; $i++){
    $total +=$i;
}
echo $total;

$fruits =array ("桃","柿","梨","林檎","葡萄");
foreach($fruits as $fruit){
    echo"好きなフルーツは".$fruit;
    echo"\n";
}

$i =1;
for($i =1; $i<=100; $i++)
    if ($i % 5 ==0){
        echo $i;
        echo "\n";
    }