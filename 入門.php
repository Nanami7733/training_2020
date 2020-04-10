<?php

//3-5for 文
//入力値を取得してecho
$input1 = trim(fgets(STDIN)); 

// $input1の回数分だけループを回す
for($i=0; $i < $input1; $i++){
    // 2行目以降の標準入力の取得
    echo trim(fgets(STDIN)); 
}







?>