<?php


$file='dir/upload.image.jpg';
//方法1
$a=pathinfo($file);
echo $a['extension'].'<br/>';
//方法2
echo substr($file,strrpos($file,'.')+1).'<br/>';
//方法3
echo array_pop(explode('.',$file)).'<br/>';
//方法4
echo preg_replace('/(.)*\.{1}/ix','',$file).'<br/>';
//方法5
echo ltrim(strrchr($file,'.'),'.'),'<br/>';
//方法6
echo strrev(substr(strrev($file),0,strpos(strrev($file),'.')));

 ?>