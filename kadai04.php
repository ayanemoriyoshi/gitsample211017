<?php
//1.引数に数値を指定して実行すると、数値を2倍にして返す関数を作成してください
function nibai($max) {
   $result = $max / 2;
   
return $result;
}

echo nibai(100);

echo "\n";

//2.$a と $b を仮引数に持ち、　$a と $b　を足した結果を返す関数を作成してください
function add($a, $b){
 $result = $a + $b;
 
 return $result;
 }
 
 echo add(2, 3);


echo "\n";

//3.$arr という配列の仮引数を持ち、数値が入った配列array(1, 3, 5 ,7, 9) を渡すとその要素をすべてかけた結果を返す関数を作成してください
$arr = array(1, 3, 5, 7, 9);

function arrkakeru($arr)
{
    $result = 1;
    foreach ($arr as $value) {
        $result *= $value;
    }
    echo ($result);
}
arrkakeru($arr);

echo "\n";

//4.【応用】　下記のプログラムは、配列の中で1番大きい値を返す max_array という関数を実装しようとしています。途中の部分を完成させてください
function max_array($arr)
{
    // とりあえず配列の最初の要素を一番大きい値とする
    $max_number = $arr[0];
    foreach($arr as $a){
        if ($max_number >= $a) {
            return $max_number;
        }
    }
    
    
}
echo max_array($arr);

echo "\n";

//5.下記のビルトイン関数の用途、使い方を調べて実際に使ってみてください
 //strip_tags関数
$str = "<h1>strip_tags関数</h1>"
  . "<p>タグ取り除く</p>";
echo strip_tags($str) ."\n";

echo "\n";

//array_push関数
$members=array("太郎","健太","太一");
            array_push($members,"聡子","美智子");
            print_r($members);
            
echo "\n";

//array_merge関数
$array1 =[1,2,3];
$array2 =[44,55,66];
$array3 =[100,200,300];

$array = array_merge($array1,$array2,$array3);

print_r($array);

echo "\n";

//time関数（現在時刻のUNIXタイムスタンプ）, 
echo time();

echo "\n";

//mktime関数（指定した日時のUNIXタイムスタンプ）
$timestamp = mktime(0,0,0,10,13,2021);
echo $timestamp;

echo "\n";

//date関数（日時など）
date_default_timezone_set('Asia/Tokyo');

echo date("Y/m/d H:i:s") ."\n";

?>