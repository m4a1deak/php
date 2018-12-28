<?php
include("admin_check.php");
include_once("../function.php");
include_once("../class/member_class.php");
include_once("../class/ulevel_class.php");
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
#扣除车款
if ($_POST['button']){
	$cheuid_arr = $_POST['UID'];
	$_member=new member_class();
	$bonus_cl=new bonus_class();
	foreach ((array)$cheuid_arr as $id)
	{
		$ulevel_cl=new ulevel_class();
		$reus=getMemberbyID($id);
		//echo $reus['ulevel'];die();
    	$sql="select * from `bonus` where uid=".$id."";
		if($query= mysql_query($sql)){
			$row = mysql_fetch_array($query);
			$iul=$ulevel_cl->getulevelbyulevel($reus['ulevel']);
			$chk=$row['b0']*$iul['yl1']/100;
			$yujine=$row['b0']-$chk;
			mysql_query("update bonus set b0=".$yujine.",b1=".$chk." where id=".$row['id']."");
		}
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
<SCRIPT LANGUAGE=javascript>
<!--
function SelectAll() {
	for (var i=0;i<document.form1.UID.length;i++) {
		var e=document.form1.UID[i];
		e.checked=!e.checked;
	}
}
-->
</script>
</head>
<body>
<form name="form1" method="post" action="?">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="10" colspan="11" align="left">
          <select name="SearchType" id="SearchType">
            <option value="1">会员编号</option>
            <option value="2">推荐人</option>
            <option value="3">服务中心</option>
            <option value="4">顶层会员</option>
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="btn1" value="搜索"></td>
      </tr>
      <tr>
        <td height="5" colspan="10" align="left">搜索时间范围：
          <input type="text" name="TimeStart" id="TimeStart" style="width:100px" onFocus="HS_setDate(this)">
          至
          <input type="text" name="TimeEnd" id="TimeEnd" style="width:100px" onFocus="HS_setDate(this)"></td>
      </tr>
      <tr>
        <td height="10" colspan="9" align="center">车款管理</td>
      </tr>
      <tr>
		<td height="21" align="center"><input type="checkbox" name="checkbox" value="checkbox" onClick="javascript:SelectAll()"></td>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">会员资格</td>
        <td align="center">推荐人</td>
        <td align="center">接点人</td>
        <td style="display:none" align="center">联系电话</td>
        <td style="display:none" align="center">QQ号码</td>
        <td align="center">服务中心</td>
		<td align="center">扣除的车款</td>
		<td align="center">扣除车款后的金额</td>
        <td style="display:none" align="center">激活时间</td>
        <td style="display:none" align="center">详细信息</td>
    </tr>
      <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` WHERE ispay>=1 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
      	$sql = "SELECT * FROM `member` WHERE ispay>=1 ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by pdt desc,id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$ul=ulevel($row['ulevel']);
			$sql2="select * from bonus where uid=".$row['id']."";
			$query2=mysql_query($sql2);
			$row2=mysql_fetch_assoc($query2);
	  ?>
      <tr>
	    <td height="21" align="center"><input type="checkbox" name="UID[]" id="UID" value="<?=$row['id']?>"></td>
        <td align="center"><?=$row['userid']?><?php if($row['ispay']==2){?>[空单会员]<?php }?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$ul['lvname']?></td>
        <td align="center"><?=$row['rname']?></td>
        <td align="center"><?=$row['fathername']?></td>
        <td style="display:none" align="center"><?=$row['usertel']?></td>
        <td style="display:none" align="center"><?=$row['userqq']?></td>
        <td align="center"><?=$row['bdname']?></td>
		 <td align="center"><?=$row2['b10']?></td>
		  <td align="center"><?=$row2['b0']?></td>
        <td  style="display:none" align="center"><?=$row['pdt']?></td>
        <td style="display:none" align="center"><input type="button" class="button" id="button" name="button" value="查看" onClick="window.location.href='admin_UpdateProfile.php?ID=<?=$row['id']?>'" /></td>
      </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="9" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="left"><input name="button" type="submit" class="btn1" id="button" value="扣除车款"/></td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </form>
</body>
</html>