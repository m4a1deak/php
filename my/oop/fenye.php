<?php
class page{
    public $cut =10;//每页五条
    public function p($num,$curr){
        $max = ceil($num/$this->cut);
        $left = max(1,$curr-2);
        $right = min($left+4,$max);
        $left = max(1,$right-4);
        $pp = array();
        for($i=$left;$i<=$right;$i++){
            $pp[$i] = $i;
        }
        return $pp;
    }
}
$x = new page();
echo $x->cut;
$xx = $x->p(100,5);
print_r($xx);
?>
