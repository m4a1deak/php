<?php
class fu{
    public function __construct(){
        echo mt_rand(1,11111);
    }
}
class zi extends fu{
    public function __construct(){
        parent::__construct();
        echo 1;
    }
}
new zi();
?>
