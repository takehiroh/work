<?php

//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function work1($a){
  $result = $a * 2;
  return $result;
}
echo work1(100);
echo "\n----------\n";



//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください。
function f($a,$b){
  $result2 = $a + $b;
  return $result2;
}
echo f(2,3);
echo "\n----------\n";



//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すと
//その要素をすべてかけた結果を返す関数を作成してください。
function work3($list) {
  $result = 1;
  foreach ($list as $value) {
    $result *= $value;
    // echo "value: " . $value . "\n";
    // echo "result: " . $result . "\n\n";
  }
  return $result;
}

$arr = array(1, 3, 5, 7, 9);
echo work3($arr);
echo "\n----------\n";



//4.【応用】　次のプログラムは、配列の中で一番大きい値を返す max_array という
// 関数を実装しようとしています。途中の部分を完成させてください。
function max_array($arr2){
  $max_number = $arr2[0];
  foreach($arr2 as $a){
    if ($a > $max_number) {
      $max_number = $a;
    }
  }
 return $max_number;
 }

$arr2 = array(1, 2, 5, 7, 3);
echo max_array($arr2);
echo "\n----------\n";
