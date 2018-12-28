<?php

if(!defined('IN_DEMOSOSOEDITPS')) {
	exit('this is wrong page,please back to homepage');
}


/*
	取回密码功能。 
	这个文件不用删除，
	上线后，只要删除根目录下的zzgetpassword.php文件。
	admin123 对应的是  00Ko3aqrA3ETk 
*/
?>
<?php
 
  $ss = "update " . TABLE_USER . " set  ps='00Ko3aqrA3ETk'   where type='admin'";
  //echo $ss;
   iquery($ss);
	
 

?>

