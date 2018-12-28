<?php
class girl{
    private $name;
    private $age;
    private $face;
    private static  $instance;
    public function __construct($name,$age,$face){
        $this->name=$name;
        $this->age=$age;
        $this->face=$face;
    }
    public static function get1($name,$age,$face){
        if(!self::$instance instanceof girl){
            self::$instance = new girl($name,$age,$face);
        }
        return self::$instance;
    }
}
/*$girl1 = girl::get1('孙猴子',555,'9分');
var_dump($girl1);*/
$girl = new girl('1','2','3');
//echo $girl->age;  私有
var_dump($girl);
?>
