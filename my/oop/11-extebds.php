<?php
class a{
    public function xx(){
        echo 11;
    }
    public function yy(){
        echo 33;
    }
}
//继承
class b extends a{
    public function xx(){
        echo 22;
    }
}
$abc = new b();
$abc->yy();
?>
