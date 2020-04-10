<?php

//3-5for 文
//入力値を取得してecho
$input1 = trim(fgets(STDIN)); 

// $input1の回数分だけループを回す
for($i=0; $i < $input1; $i++){
    // 2行目以降の標準入力の取得
    echo trim(fgets(STDIN)); 
}


//3-6
//3-6-1
//西暦昭和対応表
<?php
$sei=1926;


for($sei;$sei<=1989;$sei++){
    $syo=$sei-1925;
    echo "西暦".$sei."年は、昭和".$syo."年です。\n";
}
?>


//3-6-2
$i = trim(fgets(STDIN)); 
$input1 = trim(fgets(STDIN)); 


for($count=0;$count<$input1;$count++){
     $sei=trim(fgets(STDIN)); +$count;
     $syo=$sei-1925;
     echo "西暦".$sei."年は、昭和".$syo."年です。\n";
}


//4-2配列
//4-2-1
$array = array("戦士","侍","僧侶","魔法使い");
// この下で$arrayを出力してみよう

echo print_r($array);




//4-2-2
// 標準入力から3行分の入力を配列に代入する
for($i=0; $i < 3; $i++){
    $team[] = trim(fgets(STDIN));
}
// ここから下に記述　
// $team に「狩人」という要素追加
 $team[] = "狩人";
 
 print_r($team);


 //4-4explode
 //4-4-1

 // 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// explodeで$inputの文字列を分割してみよう！
$array = explode("/", $input);
print_r($array);


//4-4-3 count
// 標準入力から1行取得し$inputに代入
$input = trim(fgets(STDIN));
// カンマ区切りでいくつの要素が入っているか数えよう
$array = explode(",", $input);
echo count($array);


//4-4-4 ループの回数だけecho

$input = trim(fgets(STDIN));
// explodeで$inputの文字列を分割し$arrayに配列として代入
$array = explode(",", $input);
// $arrayの要素数を数えて$numに代入
$num = count($array);

for($i=1;$i<=$num;$i++){
    echo $array[$i-1]."\n";
}



//4-5-1
// 標準入力から1行データを取得
$input = trim(fgets(STDIN));

while($input){   // $inputの値が空で無ければループする
    $array[] = $input;      // 配列に$inputの値を追加
    $input = trim(fgets(STDIN));        // 標準入力から1行データを取得
}
print_r($array);



//4-5-3
$input = trim(fgets(STDIN));
$i=0;
// $inputの値が空で無ければループする
while($input){
    // 配列 に$inputの値を追加
    $array[] = $input;
    // 標準入力から1行データを取得
   if($input=="勇者"){
    $i++;  //勇者の数だけカウントアップ
    }else{
 }
  $input = trim(fgets(STDIN));
}
echo $i;



//4-6-1

$input = fgets(STDIN);
// $inputの値が空で無ければループする
while($input){
    // 配列に$inputの値を追加
    $array[] = trim($input);
    // 標準入力から1行データを取得
    $input = fgets(STDIN);
}
print_r($array);


//4-6-3
// 標準入力から1行取得し値があればループ
while($input = fgets(STDIN)){
    // ★if文の前にtrimしておくのがポイント
    $input = trim($input);
    if($input == "勇者"){
        $array[] = $input;
    }
}
echo count($array);
?>