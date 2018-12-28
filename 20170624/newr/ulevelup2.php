<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/member_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();

$sql="SELECT * FROM member where id=".$_SESSION['ID']."";
$us = getOne($sql);
$sql ="SELECT * FROM ulevel where id=".$us['ulevel']." ";
$u=getOne($sql);

if ($_POST['submit']){
	$member_cl=new member_class();
	$bonus_cl=new bonus_class();
	$sql="SELECT * FROM member where id=".$_SESSION['ID']."";
	if ($us = getOne($sql)){

 		if($us['ispay']==1 ){
			if ($us['meys']>=$u['yl7'] || $us['meys2']>=$u['yl8']){
				$sql="select count(*) from `ulevelup` where sid=".$us['id']." and issh=0";
				$query = mysql_query($sql);
				$upcount=mysql_fetch_array($query);
					if($upcount[0] >= 1){
						echo "<script language=javascript>alert('该会员的申请尚未通过审核,请耐心等待.');window.location.href='?'</script>";	
					}else{
						
						$_uul=ulevel($us['ulevel']);
						
								
								$ulevelup['cha']=$_uul['lsk'];
								if($us['zsq']>=$ulevelup['cha']){
									$ulevelup['uid']=$us['id'];
									$ulevelup['nickname']=$us['nickname'];
									$ulevelup['username']=$us['username'];
									
									$ulevelup['uplevel']=$us['ulevel'];
									$ulevelup['bdid']=$us['bdid'];
									$ulevelup['bdname']=$us['bdname'];
									
									$ulevelup['udate']=now();
									$ulevelup['issh']=1;
									add_insert_cl('ulevelup2',$ulevelup);
									
									$sus_update['lsk']=$ulevelup['cha'];
									$sus_update['zsq']=$us['zsq']-$ulevelup['cha'];
									$sus_update['meys']=0;
									$sus_update['meys2']=0;
									
									edit_update_cl('member',$sus_update,$us['id']);
									
									$sql2="select id,recount,reyeji from member where id=".$us['reid']."";
									$reman=getOne($sql2);
									
									$reman_update['reyeji']=$reman['reyeji']+$ulevelup['cha'];
									edit_update_cl('member',$reman_update,$reman['id']);
										
									
									
									$member_cl->addAreafx($us['id'],$ulevelup['cha']);
									
									$_systemyeji=new system_class();
									$_systemyeji->yejitongji(0,0,$ulevelup['cha'],0,0,0,0);
									$_sys=$_systemyeji->system_information(1);
									$_update_system['yeji']=$_sys['yeji']+$ulevelup['cha'];
									$_update_system['fanli']=$_sys['fanli']+$ulevelup['cha'];
									$_systemyeji->system_update($_update_system);
									
// 									$aa=getOne("select id,date from member where id=1");
// 									$date=date("Y-m");
// 									if ($aa['date']!=$date) {
// 										edit_sql("update `member` set date='{$date}'  where id=1");
// 										edit_sql("update `member` set wlf=0 ");
// 									}
									$_bonus_cl=new bonus_class();
									$_bonus_cl->b2bonus($us['id'],$ulevelup['cha']);
									$_bonus_cl->b4bonus();
									$bonus_cl->b0bonus();
									
									
									echo "<script language=javascript>alert('复消完成.\\n本次复消金额:".$ulevelup['cha']."' );window.location.href='?'</script>";	
								}else{
									echo "<script language=javascript>alert('您的报单币余额不足.');window.location.href='?'</script>";	
								}
						}

				
				
			}else{
				echo "<script language=javascript>alert('还未达到复消的条件.');window.location.href='?'</script>";		
			}

	}else{
		echo "<script language=javascript>alert('不符合申请条件.');window.location.href='?'</script>";	
	}
	}else{
		echo "<script language=javascript>alert('该会员不存在,请确认后重新输入.');window.location.href='?'</script>";	
	}

	
						
				
				

	
	
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
</head>
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <?php include 'leftsider.php';?>
      <div class="span9" >
	  
	  <div class="widget">
                    
                   
           <div class="page-header">
            <h1>系统公告</h1>
          </div>
          <div class="table-overflow">
<script language="javascript">
<!--
function checknickname(lx)
{
	var iframe = document.getElementById("iframe");
	var user =  document.getElementById("nickname");
	iframe.src= "checknickname.php?lx="+lx+"&nickname="+user.value;
}
-->
</script>
<iframe name="iframe" id="iframe" width="0" height="0" src="about:blank" style="display:none"></iframe>
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
 
<tr>
  <td width="50%" height="22"align="right">报单币:</td>
  <td width="50%" align="left"><?=$us['zsq']?></td>
  </tr>
  
  <tr>
  <td align="right">花费金额:</td>
  <td><?=$u['lsk']?></td>
  </tr>

 
  
</table>
<table align="center" class="ziti">
        <tr>
          <td>
         
          <input name="submit" id="submit" type="submit" class="button_green" value="复 消" onClick="javascript:return confirm('您确认申请复消吗？');">
         
          </td>
        </tr>
      </table>
<br>
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">
<thead>
        <tr>
        <td height="20" colspan="8" align="center"> 申 请 记 录</td>
      </tr>
      <tr>
     	
        <td align="center">复消会员编号</td>
        <td align="center">复消会员姓名</td>
        <td align="center">申请级别</td>
        <td align="center">金额</td>
        <td align="center">申请时间</td>
       
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `ulevelup2` WHERE uid=".$_SESSION['ID']." or sid=".$_SESSION['ID']."";
		if($query = mysql_query($sql)){
	  		$sum = mysql_num_rows($query); //计算总记录数 
		}else{
			$sum=0;	
		} 
		if($sum % $pagesize == 0) //计算总页数 
			$total = (int)($sum/$pagesize); 
		else 
			$total = (int)($sum/$pagesize) + 1; 
			if (isset($_GET['page'])) //获得页码 
			{ 
				$p = (int)$_GET['page'];
			} 
			else 
			{ 
				$p = 1;
			}
			if ($p>$total){
				$p=$total;	
			}
		$start = $pagesize * ($p - 1); //计算起始记录 
      	$sql = "SELECT * FROM `ulevelup2` WHERE uid=".$_SESSION['ID']." or sid=".$_SESSION['ID']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			
			$uul=ulevel($row['uplevel']);
	  ?>
      <tr>
        
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$uul['lvname']?></td>
        <td align="center"><?=$row['cha']?></td>
        <td align="center"><?=$row['udate']?></td>
       
        
      </tr>
      <?php
			}
		}
	  ?>
  </table>
  <table width="100%" border="0" class="ziti">
          <tr>
            <td align="left">&nbsp;</td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table>
</form>
</div>
     <!-- /span9 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /content -->
<?php include 'footer.php';?>
</body>
</html>