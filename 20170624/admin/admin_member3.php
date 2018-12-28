<?php
include("admin_check.php");
include_once("../function.php");
include_once("../class/member_class.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(1,2);
#搜索会员
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	$TimeStart=$_POST['TimeStart'];
	$TimeEnd=$_POST['TimeEnd'];
	if ($TimeStart!=NULL){
		if ($TimeEnd==NULL){
			$TimeEnd=now();	
		}
		$_SESSION['SearchTime']="and pdt>='".$TimeStart."' and pdt<='".$TimeEnd."'";	
	}else{
		$_SESSION['SearchTime']=NULL;		
	}
	if ($SearchContent!=NULL){
		$SearchType=$_POST['SearchType'];
		if ($SearchType==1){
			#搜索会员编号
			$_SESSION['Search']="and nickname='".$SearchContent."'";
		}elseif($SearchType==2){
			#搜索推荐人
			$_SESSION['Search']="and rname='".$SearchContent."'";
		}elseif($SearchType==3){
			#搜索报单中心
			$_SESSION['Search']="and bdname='".$SearchContent."'";
		}elseif($SearchType==4){
			#搜索顶层会员
			$_SESSION['Search']="and fathername='顶层会员' and nickname='".$SearchContent."'";
		}
	}else{
		$_SESSION['Search']=NULL;	
	}
}else{
	if ($_GET['page']==NULL){
		$_SESSION['Search']=NULL;	
		$_SESSION['SearchTime']=NULL;
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="../js/calendar.js"></script>
<title>个人资料</title>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>
<body>
<form name="form1" method="post" action="?">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
 
      <tr>
        <td height="10" colspan="10" align="center">会员职级</td>
      </tr>
      <tr>
        <td align="center">级别</td>
        <td align="center">数量</td>
<!--        <td align="center">业绩</td>-->
    </tr>
    <?php
  	$ul = new ulevel_class();
  	for ($i=1;$i<=4;$i++){
  		$rs = zjulevel($i);
  		$sql="select count(*) from member where zjulevel={$rs['id']}";
		$query = mysql_query($sql);
		$row = mysql_fetch_assoc($query);
		$us=getMemberbyID(1);
		$lsk=$us['y1']+$us['y2']+$us['y3'];
	?>
  	<tr>
  	  <td style="display:none;"><input type="hidden" name="id<?=$i?>" value="<?=$i?>" /></td>
	  	<?php if($i == 1){?><td align="center" >帮办</td><?php }?>
	  	<?php if($i == 2){?><td align="center" >督导</td><?php }?>
	  	<?php if($i == 3){?><td align="center" >总监</td><?php }?>
	  	<?php if($i == 4){?><td align="center" >董事</td><?php }?>
	  	<td align="center" ><?php echo $row['count(*)'];?></td>
<!--	  	<td align="center" ><?php echo $lsk?></td>-->
 </tr>
  <?php }?>
    
    <!--
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` WHERE zjulevel>2 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
      	$sql = "SELECT * FROM `member` WHERE zjulevel>2 ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by pdt desc,id desc limit ".$start.",".$pagesize;
		$i=0;
		$b=0;
      	if($query = mysql_query($sql)){
			for ($i=0;$i<4;$i++){
//		while ($row=mysql_fetch_array($query) ){
			if($row['zjulevel']==3){
				$sql1="select * from member where zjulevel=3";
				$query1 = mysql_query($sql1);
				$num1=mysql_num_rows($query1);//市代
				
			}elseif ($row['zjulevel']==4){
				$sql2="select * from member where zjulevel=4";
				$query2 = mysql_query($sql2);
				$num2=mysql_num_rows($query2);//省代
			}elseif ($row['zjulevel']==5){
				$sql3="select * from member where zjulevel=5";
				$query3= mysql_query($sql3);
				$num3=mysql_num_rows($query3);//总监
			}elseif ($row['zjulevel']==6){
				$sql4="select * from member where zjulevel=6";
				$query4 = mysql_query($sql4);
				$num4=mysql_num_rows($query4);//董事
			}
			$us=getMemberbyID(1);
			$lsk=$us['y1']+$us['y2']+$us['y3'];
			$zjul=zjulevel($row['zjulevel']);
			
	  ?>
	  
      <tr>
      <td align="center"><?=$zjul['zjname']?></td>
         <td align="center">
         <?php if ( $i==0){?>市代<?php }if ( $i==1){?>省代<?php }if ( $i==2){?>总监<?php }if ( $i==3){?>董事<?php }?>
         </td>
          <td align="center">
         <?php if ($zjul['ulevel']==3){$b=1?><?=$num1?><?php }elseif ($row['zjulevel']==4 && $b==1){$b=2;?><?=$num2?><?php }elseif ($row['zjulevel']==5 && $b==2){$b=3;?><?=$num3?><?php }elseif ($row['zjulevel']==6 && $b==3){$b=4;?><?=$num4?><?php }?>
         </td>
         <td align="center">
         <?php if (1==1){?>
         	<?=$lsk?>
         <?php }?></td>
      </tr>
      <?php
			}
		}
	  ?>
      --><tr>
        <td height="21" colspan="10" align="right">
        <table width="100%" border="0">
          <tr>
           <td align="left">

            </td>
			
<!--            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>-->
          </tr>
        </table></td>
      </tr>
    </table>
    </form>
</body>
</html>