<?php
class Ad{
    public $rand;
    public static $ob = null;
    final protected function __construct()
    {
        $this->rand = mt_rand(100000, 9999999999);
    }
    public static function getins(){
        if(self::$ob === null){
            self::$ob =  new Ad();
        }
        return self::$ob;
    }
}
var_dump(Ad::getins());//一样
var_dump(AD::getins());
var_dump(AD::$ob);

?>
