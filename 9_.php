<?php



// 9-2-2
class Greeting {
    public $msg;
    public $target;

    public function __construct() {
        $this->msg = "hello";
        $this->target = "paiza";
    }
}

class Hello extends Greeting {
    public function sayHello() {
        echo $this->msg." ".$this->target;
    }
}

$player = new Hello();
$player->sayHello();




// 9-3メソッドのオーバーライド
class Box {
    public $myItem;

    public function __construct($item) {
        $this->myItem = $item;
    }

    public function open() {
        echo "宝箱を開いた。".$this->myItem."を手に入れた。\n";
    }
}
class MagicBox extends Box {
    public function look() {
        echo "宝箱は妖しく輝いている。\n";
    }
    public function open() {
        echo "宝箱を開いた。".$this->myItem."が襲ってきた！\n";
    }
}

$box = new Box("鋼鉄の剣");
$box->open();

$magicBox = new MagicBox("モノマネモンスター");
$magicBox->look();
$magicBox->open();



//9-3-1

// メソッドをオーバーライドしよう
class Greeting {
    public function sayHello() {
        echo "greeting paiza";
    }
}

class Hello extends Greeting {
    // この下で、メソッドをオーバーライドする
    public function sayHello(){
        echo "hello paiza";
    }


}

$player = new Hello();
$player->sayHello();



//9-5-1
// RPGの攻撃シーン
class Player {
    public $myName;

    public function __construct($name) {
        $this->myName = $name;
    }

    public function attack($enemy) {
        echo $this->myName."は".$enemy."を攻撃した\n";
    }
}

class Warrior extends Player {
    // ここにメソッドのオーバーライドを実装する
    public function attack($enemy){
        echo $this->myName."は".$enemy."を猛攻撃した\n";
    }


}
$hero = new Player("勇者");
$wizard = new Player("魔法使い");
$warrior = new Warrior("戦士");
$players = [$hero, $wizard, $warrior];

foreach ($players as $player) {
    $player->attack("スライム");
}





?>