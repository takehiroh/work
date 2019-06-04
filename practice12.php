<?php
$name = "Takehiro";
if ($name == "Takehiro") {
    echo "私は あなたの名前 です";
}else {
    echo "あなたの名前ではありません";
}



$total = 0;
for ($i = 0; $i < 10000; $i++) {
    $total += $i; 
}
echo $total;



$fruits = ["meron","suika","nashi","banana","ichigo"];
foreach ($fruits as $fruit) {
    echo $fruit;
    echo "\n";
}




$start = 1;
$end = 100;
for($i = $start; $i <= $end; $i++){
    if($i % 5 == 0){
    echo $i;
    echo "\n";
    }
}