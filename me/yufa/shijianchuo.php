<?php 

/*echo time(),"<br>";
echo date('Y/m/d H:i:s'),"<br>";
echo microtime(),"<br>";*/
//昨天时间

$lastday = time()-24*3600;
echo date('Y年m月d日 H:i:s',$lastday);
echo "<br>";
var_dump(checkdate(2,12,1432));

 ?>