<?php

//8-2
function walk(){
    $message = "勇者は荒野を歩いていた。";
    echo $message ;
}
walk();



class Player{
    public function walk(){  //walk=メソッド
        $message = "勇者は荒野を歩いていた。";
        echo $message ;
    }
}
$player1 = new Player();
$player1->walk();
?>