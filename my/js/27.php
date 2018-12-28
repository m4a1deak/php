<?php
echo '索引数组';
$arr = array('a','b','c');
print_r($arr);
echo json_encode($arr);
echo '<br>';
echo '关联数组';
$arr = array(a=>'aaa',b=>'bbb',c=>"ccc");
print_r($arr);
echo json_encode($arr);
echo '<br>';
echo '对象';
class a{
    public $name ='lisi';
    public $age = 12;
    public function haha(){
        echo 'kaixin';
    }
}
var_dump(new a());
echo json_encode(new a());
echo '<hr>';
$x =  '{"name":"lisi","age":12}';
print_r(json_decode($x));
?>
