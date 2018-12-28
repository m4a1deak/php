<?php
include("admin_check.php");
include_once("../function.php");
include_once("../class/system_class.php");
include_once("../class/member_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
//$us=GetMemberbyID($_SESSION['ID']);
if ($_POST['submit']){
	$level=(int)$_POST['level'];
	if(is_numeric($_POST['jine'])){
	    $b=new bonus_class();
	    $sql="select id,nickname,shourulevel from member where shourulevel={$_POST['level']}";
	    $rs=getAll($sql);
	    if(!empty($rs)){
	    	foreach($rs as $v){
	    	    $sql="update member set b5=b5+{$_POST['jine']} where id={$v['id']}";
	    	    mysql_query($sql);
	    	    $b->bonus_laiyuan($v['id'], $v['nickname'], $v['shourulevel'], "-",5, $_POST['jine'], "员工工资");
	    	    
	    	}
	    }
		$b->b0bonus();
		alert("分红成功","?");
	}else{
		alert("请输入正确的数值","?");
	}
}
$information=que_select_cl('information',1);
if ($_POST['save']){
	$information['aixinjijin']=$_POST['content1'];
		
		edit_update_cl("information",$information,1);
	echo "<script language=javascript>alert('爱心捐赠公告成功.');window.location.href='?'</script>";
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<link rel="stylesheet" href="../kindeditor-4.1.9/themes/default/default.css" />
<link rel="stylesheet" href="../kindeditor-4.1.9/plugins/code/prettify.css" />
<script charset="utf-8" src="../kindeditor-4.1.9/kindeditor.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.9/lang/zh_CN.js"></script>
<script charset="utf-8" src="../kindeditor-4.1.9/plugins/code/prettify.js"></script>
<script>
	KindEditor.ready(function(K) {
		var editor1 = K.create('textarea[name="content1"]', {
			cssPath : '../kindeditor-4.1.9/plugins/code/prettify.css',
			uploadJson : '../kindeditor-4.1.9/php/upload_json.php',
			fileManagerJson : '../kindeditor-4.1.9/php/file_manager_json.php',
			allowFileManager : true,
			afterCreate : function() {
				var self = this;
				K.ctrl(document, 13, function() {
					self.sync();
					K('form[name=example]')[0].submit();
				});
				K.ctrl(self.edit.doc, 13, function() {
					self.sync();
					K('form[name=example]')[0].submit();
				});
			}
		});
		prettyPrint();
	});
</script>
<title>员工工资</title>
<script language="javascript">
<!--
function checknickname(lx)
{
	var iframe = document.getElementById("iframe");
	var user =  document.getElementById("nickname");
	iframe.src= "../member/checknickname.php?lx="+lx+"&nickname="+user.value;
}

function CheckForm(){
	newstitle=document.form1.newstitle.value;
	newscontent=document.form1.newscontent.value;
	if(newstitle.length == 0){
		alert("温馨提示:\n请输入爱心捐赠标题.");
		document.form1.newstitle.focus();
		return false;
	}
	if(newscontent == ''){
		alert("温馨提示:\n请输入爱心捐赠内容.");
		return false;
	}
	return true;
}

-->
</script>
</head>
<body>
<iframe name="iframe" id="iframe" width="0" height="0" src="about:blank" style="display:none"></iframe>

<table width="100%" height="380" border="0">
  <tr>
    <td valign="top"><form name="form1" method="post" action="?" onSubmit="return CheckForm()">

<br />
	内容：
    <br />
    <textarea name="content1" style="width:700px;height:200px;visibility:hidden;"><?php echo $information['aixinjijin'];?></textarea>
	<br/>
	<input type="submit" name="save" class="btn1" value="修改" />&nbsp;&nbsp;
	<input type="reset" name="reset" class="btn1" value="重置" />
</form></td>

<form name="form1" method="post" action="?" onSubmit="return CheckForm();">

<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">

 
  <tr >
  <td align="center" colspan="2">爱心基金</td>
  
  </tr>
  <tr >
  <td align="right" width="50%">累计金额:</td>
  <td align="left" >
  <?php 
  	$s=new system_class();
  	$r=$s->system_information(1);
  	echo $r['aixinjijin'];
  ?>
  </td>
  
  </tr>
  
</table>
<table width="100%" style="margin-top:20px;" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
        <td height="20" colspan="6" align="center"> 捐 赠 记 录</td>
      </tr>
      <tr>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">捐赠金额</td>
        <td align="center">捐赠时间</td>
        
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `aixinjijin` WHERE uid=".$_SESSION['ID']."";
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
      	$sql = "SELECT * FROM `aixinjijin` WHERE uid=".$_SESSION['ID']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['jine']?></td>
        <td align="center"><?=$row['time']?></td>
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
<iframe id='iframe' src="" style="display:none;"></iframe>
</body>
</html>