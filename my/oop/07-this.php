<?php
//this是谁
class A{
    public $name = "曹禺";
    public $book = "雷雨";
    public function aaa(){
        echo $this->name."拍电影";
    }

}
$a = new A();
//
echo $a->aaa();
$b = new A();
$b->name="张艺谋";
echo $b->aaa()
?>
