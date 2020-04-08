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



?>