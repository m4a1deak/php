<?php
/*
	欢迎使用DM企业建站系统，本系统由www.demososo.com开发。
*/
if(!defined('IN_DEMOSOSO')) {
	exit('this is wrong page,please back to homepage');
}
?>
<?php
if($act=="update"){   
$jump_back = $jumpv_file.'&act=edit&tid='.$tid;

      if($abc1=="" or strlen($abc1)<1) {alert('请输入语言说明');  jump($jump_back); }
	  

            $sql = "SELECT id from ".TABLE_LANG." where path='$abc1' and id<>'$tid' order by id desc";
            $num = getnum($sql);             
            if($num>0)
            { alert('出错，路径重复。');
            }
            else{
              $ss = "update ".TABLE_LANG." set  path='$abc1',langfile='$abc2' where  pbh='".USERBH."' and id='$tid' limit 1";
             //sta_main use button to set in list.php
              iquery($ss);
           //alert("修改成功");

            }

       jump($jump_back);                      
}

else{

 $sql = "SELECT * from ".TABLE_LANG."  where  id='$tid' and pbh='".USERBH."'    order by id limit 1"; 
 
$row = getrow($sql);

	  
		$path=$row['path']; 
    $lang=$row['lang']; 
    $langfile=$row['langfile']; 
	
 
		$jump_insert=$jumpv_file.'&act=update&tid='.$tid;	
 
 
?> 




<form  onsubmit="javascript:return checkhere(this)" action="<?php echo $jump_insert;?>" method="post">
  <table class="formtab">
 
	
    

	<tr>
      <td class="tr">访问路径：</td>
      <td> <input name="path" type="text" value="<?php echo $path?>" class="form-control" />
<?php echo $xz_must;?> <br />
<p class="cgray">
(  
  访问路径可以修改， <br />
比如www.yoursite.com/<span class="cred">en</span>/index.php 还是 www.yoursite.com/<span class="cred">english</span>/index.php
)
</p>
        </td>
    </tr>
 
<tr>
      <td class="tr">语言标识：</td>
      <td>  <?php echo $lang?>  (标识不能修改)
        </td>
    </tr>
 
 
    <tr>
      <td class="tr">替换语言文件：</td>
      <td> 
            <input name="langfile" type="text" value="<?php echo $langfile?>"  size="30" />
            <?php echo $xz_must;?> <br />
        </td>
    </tr>


<tr>
      <td></td>
      <td>
      <input  class="mysubmit" type="submit" name="Submit" value="提交"></td>
    </tr>
  </table>
</form>
 
	
<?php } ?>
 
<script>
function  checkhere(thisForm){
	 
		if (thisForm.path.value==""){
		alert("请输入路径");
		thisForm.path.focus();
		return (false);
        } 
		 
	
		
}

</script>


