<?php 
echo "字符串长度";
$str1 = "helloword"; 
echo strlen($str1);
//9
echo "<br>";
$str2 = "中国";
//6
echo strlen($str2);
echo "<br>";
echo mb_strlen($str1);
//9
echo "<br>";
echo mb_strlen($str2,'utf8');
echo "<hr/>";



echo "查找字符串位置<br>";
$str = "abcabc";
echo strpos($str,"a"),"<br>";
//0
echo strpos($str,"a",1),"<br>";
//3
var_dump(strpos($str,"A"));
//false
echo "<br>";
echo stripos($str,"A"),"<br>";
echo stripos($str,"A",1),"<br>";
echo "<br>";
echo strrpos($str,"a"),"<br>";//3
echo strrpos($str,"a",-3),"<br>";//3
echo strrpos($str,"a",-4),"<br>";//0

echo "<hr/>";
$str = "fuck you";
echo str_replace('fuck', 'f**k', $str);
echo "<br>";
$str="男人,女人,男孩,女孩";
echo strtr($str,array("男"=>"女","女"=>"男"));



$str = "hello world";
echo substr($str,7);//orld
echo "<br>";
echo substr($str,1,3);//ell
echo "<br>";
echo substr($str,-3);//rld
echo "<br>";
echo substr($str,-5,3);//wor
echo "<br>";
echo substr($str,-5,-2);//wor



$str = "php,mysql,study";
echo explode(",", $str);
print_r(explode(",", $str));



$arr = array("name"=>"zhangsan","age"=>"23","xingbie"=>"nan");
echo implode("/", $arr);
echo "<hr/>";
$a = "a.jpg";
echo strpos($a,".");
echo substr($a,(strpos($a,".")+1));
echo "<hr/>";
$a = "abc.xx.jpg";
echo strrchr($a, ".");
echo "<hr/>";
echo ltrim(strrchr($a, "."),".");




 ?>