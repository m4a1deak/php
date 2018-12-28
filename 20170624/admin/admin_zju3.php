<?php
include("admin_check.php");
include_once("../function.php");
include_once("action.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(1,2);
#搜索会员
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	
	if ($SearchContent!=NULL){
		$SearchType=$_POST['SearchType'];
		if ($SearchType==1){
			#搜索会员编号
			$_SESSION['Search']="and nickname like '%".$SearchContent."%'";
		}elseif($SearchType==2){
			#搜索推荐人
			$_SESSION['Search']="and rname like '%".$SearchContent."%'";
		}elseif($SearchType==3){
			#搜索报单中心
			$_SESSION['Search']="and bdname like ='%".$SearchContent."%'";
		}elseif($SearchType==4){
			#搜索顶层会员
			$_SESSION['Search']="and  username like '%".$SearchContent."%'";
		}
	}else{
		$_SESSION['Search']=NULL;	
	}
}else{
	if ($_GET['page']==NULL){
		$_SESSION['Search']=NULL;	
		
	}
}
#清空业绩
if ($_POST['button']){
	$cheuid_arr = $_POST['UID'];

	foreach ((array)$cheuid_arr as $id)
	{
		
		edit_sql("update `member` set area4=0,area5=0 where id=".$id."");
		action::record("清空业绩",$id, $_SESSION['adminid'],"福利奖");

	}
	echo "<script language=javascript>alert('清空业绩完成.');window.location.href='?'</script>";
}




?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="../js/calendar.js"></script>

<SCRIPT LANGUAGE=javascript>
<!--
function SelectAll() {
	for (var i=0;i<document.form1.UID.length;i++) {
		var e=document.form1.UID[i];
		e.checked=!e.checked;
	}
}
-->

</SCRIPT>
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
        <td height="10" colspan="19" align="left">
          <select name="SearchType" id="SearchType">
            <option value="1">会员编号</option>
            <option value="4">会员姓名</option>
            <option value="3">服务中心</option>
            
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="btn1" value="搜索">
      </td>
      </tr>
      
      <tr>
        <td height="10" colspan="19" align="center">小区业绩5w会员</td>
      </tr>
      <tr>
       <td height="21" align="center"><input type="checkbox" name="checkbox" value="checkbox" onClick="javascript:SelectAll()"></td>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">左区业绩</td>
        <td align="center">右区业绩</td>
        <td align="center">联系电话</td>
        <td align="center">服务中心</td>
        <td align="center">注册时间</td>
        <td align="center">激活时间</td>
        <!--  
        <td align="center">详细信息</td>
        -->
    </tr>
      <?php
      $xuhao=1;
      	$sql = "SELECT * FROM `member` WHERE  ispay>0 ".$_SESSION['Search']."  ORDER BY id DESC,id asc ";
		
      	$arr=getAll($sql);
	    foreach ($arr as $key => $row){
			$lsk=min($row['area4'],$row['area5']);
            if ($lsk>=700000 && $lsk<3000000) {//70w
		
	
	  ?>
      <tr>
        <td height="21" align="center"><input type="checkbox" name="UID[]" id="UID" value="<?=$row['id']?>"></td>
        <td align="center"><?=$row['userid']?><?php if($row['ispay']==2){?>[空单]<?php }?></td>
        <td align="center"><?=$row['username']?></td>
       
       
        <td align="center"><?=$row['area4']?></td>
        <td align="center"><?=$row['area5']?></td>
        <td align="center"><?=$row['usertel']?></td>
        
        

       	 <td  align="center"><?=$row['bdname']?></td>
        
         <td align="center"><?=$row['rdt']?></td>
         <td  align="center"><?=$row['pdt']?></td>
        <!--<td align="center">
         <input type="button" class="button" value="增减复投币" onclick="chongxiao(<?php echo $row['id'];?>);"/>
         <input type="button" class="button" id="button" name="button" value="查看" onClick="window.location.href='admin_UpdateProfile.php?ID=<?=$row['id']?>'" /> 
         <input type="button" class="button" id="button" name="button" value="管理" onClick="manage(<?=$row['id']?>)" /></td>
         -->
      </tr>
      <?php
			}
			}
		
	  ?>
      <tr>
        <td height="21" colspan="10" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="left" >
            <input name="button" type="submit" class="btn3" id="button" value="清空业绩" onClick="{if(confirm('您确定要进行清空业绩吗?')){this.document.selform.submit();return true;}return false;}">
             </td>
          </tr>
        </table></td>
      </tr>
    </table>
    </form>
</body>
</html>