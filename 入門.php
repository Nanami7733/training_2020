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



//4-7-2
// 標準入力から1行取得し値があればループ
while($input = fgets(STDIN)){
    $array[] = trim($input);
}
// ランダムの上限値を計算して変数に代入
$max_num = count($array)-1;
// 配列の中身を出力
print_r($array);
// ランダム出力
$rand_num = rand(0,$max_num);
echo $array[$rand_num];





//5章　連想配列。foreach

//5-2-1 連想配列への格納の仕方

$item = array(
    "ショートソード" => 12,
    "銅の盾" => 4,
    "布の服"=> 7
);
print_r($item);



//5-2-2


for($i=0 ; $i<3 ; $i++){
	$input = trim(fgets(STDIN));
	
	$key_value =explode("/", $input);// 入力値を/で分割
	
	$key = $key_value[0];// 手前の要素をkeyとして、後の要素をvalueとして連想配列に代入
	$value = $key_value[1];
	$team[$key] = $value;

}
// ここから下に記述　
// $team のkeyが戦士のvalueを出力

print_r($team["戦士"]);




//5-3-3

while($input = fgets(STDIN)){
	// 改行等を取り除いて配列に代入
	$item[] = trim($input);
}
// 小さい順に並び替え
sort($item);
print_r($item);


//5-3-4

$input = trim(fgets(STDIN));
$item = explode(",", $input);
rsort($item);
print_r($item);




//5-4-1to4
//sort,rsort

//asort,arsort

//ksort,krsort


//5-4-5

while($a=fgets(STDIN)){
    $at=trim($a);
    $ax=explode(",",$at);
    
    $k=$ax[0];
    $v=$ax[1];
    $team[$k]=$v;
    
}

arsort($team);
print_r($team);


//5-5-1

$item = array("ショートソード", "ロングソード", "ブレードソード", "バスタードソード");
// foreach ループで $item 配列の value 全てを一つずつ
// \n を末尾に付けて改行しながら出力してみましょう。
foreach($item as $value){
    echo $value."\n";
}




//5-5-3

$input = trim(fgets(STDIN));
$array = explode(",", $input);
$i=0;
// ここから下に記述　
// 配列のvalueに「勇者」が何回出現するか数えて
foreach($array as $member){
    if($member=="勇者"){
        $i++; //勇者の数カウントアップ
    }
}

echo $i;


//5-6-1
$item = array(
	"ショートソード" => 2000,
	"ロングソード" => 5000,
	"鉄の盾" => 1600,
	"鎖かたびら" => 2800
);

// ここから下に記述
foreach($item as $key => $value){
    echo $key."は".$value."円です。\n";
}




//5-6-2

while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	if($value<=2000){
	    $item[$key] = $value;
	}else{
	    
	}
	// 連想配列として$itemに代入
	
}

arsort($item);

print_r($item);






//5-6-3
while($input = trim(fgets(STDIN))){
	// カンマで分割
	$key_value = explode(",", $input);
	$key = $key_value[0];
	$value = $key_value[1];
	// 連想配列として$resultに代入
	$result[$key] = $value;
}
// ここから下に記述
// 得点が高い順番に並び替え、print_rで出力後、
// 勇者が何位なのか数字で出力してみましょう。
arsort($result);
$i=1;


foreach($result as $key => $value){  ///////////////////////////////////////
    if($key == "勇者"){
        $rank = $i;
    }
    $i++;
}
print_r($result);
echo $rank;





//5-8-2

$item_img = array(
    "剣" => "http://paiza.jp/learning/images/sword.png",
    "盾" => "http://paiza.jp/learning/images/shield.png",
    "回復薬" => "http://paiza.jp/learning/images/potion.png",
    "クリスタル" => "http://paiza.jp/learning/images/crystal.png"
);
// ここから下に記述


foreach($item_img as $key => $val){
    //URLを参照可能な、形に変更
}


while($input=fgets(STDIN)){
    $tri_inp[]=trim($input);    //入力値を数列に代入
}


for($i=0;$i<=5;$i++){           // アイテムの個数会ループする処理
    $index = $tri_inp[$i];
    echo "<img src=".$item_img[$index]."><br>\n";
   
}



//模範解答
$item_img = array(
    "剣" => "http://paiza.jp/learning/images/sword.png",
    "盾" => "http://paiza.jp/learning/images/shield.png",
    "回復薬" => "http://paiza.jp/learning/images/potion.png",
    "クリスタル" => "http://paiza.jp/learning/images/crystal.png"
);
// ここから下に記述
while($input = fgets(STDIN)){
    $input = trim($input);
    echo "<img src=".$item_img[$input].">";
}





//6-5
//6-5-1
$teams = [
    ["勇者", "忍者"],
    ["武士", "戦士"],
    ["僧侶", "魔法使い"],
  ];
  
  
  for ($i = 0; $i < count($teams); $i++) {
    for ($j = 0; $j < count($teams[$i]); $j++) {
      // この下に配列の値を出力するコードを記述
      echo $teams[$i][$j];
  
      echo "\n";
    }
  }

  



  //6-5-2
  $teams = [
    ["勇者", "忍者"],
    ["武士", "戦士"],
    ["僧侶", "魔法使い"],
  ];
  
  foreach ($teams as $team) {
    foreach ($team as $member) {
      // この下に$memberの値を出力するコードを記述
  
      print_r($member);
      echo "\n";
    }
  }


  //6-7
  //6-7-1
  // ドットで文字を出力しよう
$letter_A = array(
    array(0, 0, 1, 1, 0, 0),
    array(0, 1, 0, 0, 1, 0),
    array(1, 0, 0, 0, 0, 1),
    array(1, 1, 1, 1, 1, 1),
    array(1, 0, 0, 0, 0, 1),
    array(1, 0, 0, 0, 0, 1),
);
// ここに、ドットを表示するコードを記述する
foreach ($letter_A as $column) {
    foreach ($column as $row) {
        if ($row == 1) {
            echo "@";
        }else {
            echo " ";
        }
    }
    echo "\n";
}





//6-12
//6-12-1
// 2次元配列で画像を表示する

// 画像用配列
$players_img = array(
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Empty.png",
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Dragon.png",
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Crystal.png",
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Hero.png",
    "https://paiza-webapp.s3.amazonaws.com/files/learning/rpg/Heroine.png",
);

// 配置データを読み込み
for ($i = 0; $i < 3; $i++) {
    $team[] = explode(",", trim(fgets(STDIN)));

}

// 配置データに合わせて表示する
echo "<table>";
foreach ($team as $row) {
    echo "<tr>";
    foreach ($row as $column) {
        echo "<td><img src='".$players_img[$column]."'></td>";
    }
    echo "</tr>\n";
}
echo "</table>\n";








?>