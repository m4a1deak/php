<?php
//延迟绑定
/*class fu{
    public function a(){
        echo "父亲";
    }
    public function b(){
        $this->a();
    }
}
class zi extends fu{
    public function a(){
        echo "儿子";
    }
}
$a = new zi();
$a->b();//儿子*/



/*class fu{
public function a(){
    echo "父亲";
}
public static function b(){
    self::a();
}
}
class zi extends fu{
    public function a(){
        echo "儿子";
    }
}
zi::b();//父亲*/


class fu{
    public static function a(){
        echo "父亲";
    }
    public static function b(){
        //延迟绑定
        static::a();
    }
}
class zi extends fu{
    public static function a(){
        echo "儿子";
    }
}
zi::b();
?>
