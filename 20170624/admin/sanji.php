<?php
include("admin_check.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/member_class.php");
include_once("../class/ulevel_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
#搜索会员
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	$TimeStart=$_POST['TimeStart'];
	$TimeEnd=$_POST['TimeEnd'];
	$SearchType=$_POST['SearchType'];
	if ($TimeStart!=NULL){
		if ($TimeEnd==NULL){
			$TimeEnd=now();	
		}
		$_SESSION['SearchTime']="and udate>='".$TimeStart."' and udate<='".$TimeEnd."'";	
	}else{
		$_SESSION['SearchTime']=NULL;		
	}
	if ($SearchContent!=NULL){
		if ($SearchType==1){
			#搜索会员编号
			$_SESSION['Search']="and nickname='".$SearchContent."'";
		}
	}else{
		if ($SearchType==1){
			$_SESSION['Search']=NULL;
		}elseif($SearchType==2){
			#搜索未发放
			$_SESSION['Search']="and isgrant=0";
		}elseif($SearchType==3){
			#搜索已发放
			$_SESSION['Search']="and isgrant=1";
		}
	}
}else{
	if ($_GET['page']==NULL){
		$_SESSION['Search']=NULL;	
		$_SESSION['SearchTime']=NULL;
	}
}

#充值确认
if ($_POST['button']){
$cheuid_arr = $_POST['UID'];
	$_bonus=new bonus_class();
	$_member=new member_class();
	$_ulevel_class=new ulevel_class();
	foreach ((array)$cheuid_arr as $id)
	{
		
		$ulevelup=que_select_cl('ulevelup',$id);
		if ($ulevelup['issh2']==1){
			$us=que_select_cl('member',$ulevelup['uid']);
			$rs=que_select_cl('member',$ulevelup['sid']);
			$ul=ulevel($ulevelup['uplevel']);
			$us_update['ulevel']=$ul['ulevel'];
			$us_update['lsk']=$ul['lsk'];
			$us_update['dan']=$ul['dan'];
			$us_update['ispay']=1;
			if (!$us['pdt']){
				$us_update['pdt']=now();
			}
		if ($ul['ulevel']==1){
				$rs_update['x1']=$rs['x1']+1;
			}elseif ($ul['ulevel']==2){
				$rs_update['x2']=$rs['x2']+1;
			}elseif ($ul['ulevel']==3){
				$rs_update['x3']=$rs['x3']+1;
			}elseif ($ul['ulevel']==4){
				$rs_update['x4']=$rs['x4']+1;
			}elseif ($ul['ulevel']==5){
				$rs_update['b1']=$rs['b1']+1;
			}elseif ($ul['ulevel']==6){
				$rs_update['b2']=$rs['b2']+1;
			}elseif ($ul['ulevel']==7){
				$rs_update['b3']=$rs['b3']+1;
			}elseif ($ul['ulevel']==8){
				$rs_update['b4']=$rs['b4']+1;
			}elseif ($ul['ulevel']==9){
				$rs_update['chl']=$rs['chl']+1;
			}elseif ($ul['ulevel']==10){
				$rs_update['chr']=$rs['chr']+1;
			}
			
			$ulevelup['rdate']=now();
			edit_update_cl('ulevelup',$ulevelup,$ulevelup['id']);
			edit_update_cl('member',$us_update,$us['id']);
			edit_update_cl('member',$rs_update,$rs['id']);
			$cc_xiugai['issh']=1;
    		edit_update_cl('ulevelup',$cc_xiugai,$id);
//			$shengyu=$_bonus->b1bonus($us['id'],$us['reid'],$ulevelup['cha']);
//			$_member->addArea($us['id'],$us['treeplace'],$shengyu);
			$_systemyeji=new system_class();
			$_systemyeji->yejitongji(0,0,$ulevelup['cha'],0,0,0,0);
			
			
		}else {
			$cc_xiugai['issh']=1;
			edit_update_cl('ulevelup',$cc_xiugai,$id);
		}
	}
	echo "<script language=javascript>alert('升级确认完成.');window.location.href='?'</script>";
}

#删除记录
if ($_POST['button4']){
$cheuid_arr = $_POST['UID'];
	foreach ((array)$cheuid_arr as $id)
	{	
		$ulevelup=que_select_cl('ulevelup',$id);
		$us=que_select_cl('member',$ulevelup['uid']);
		if ($ulevelup['issh']==0){
			edit_delete_cl('ulevelup',$id);
		}else {
			echo "<script language=javascript>alert('已确认记录不能删除.');window.location.href='?'</script>";
			return ;
		}
	}
	echo "<script language=javascript>alert('删除完成.');window.location.href='?'</script>";
}



//if ($_POST['button4']){
//$cheuid_arr = $_POST['UID'];
//	foreach ((array)$cheuid_arr as $id)
//	{	$rs=getMemberbyID($id);
//		$ulevelup=que_select_cl('ulevelup',$id);
//		$us_update['ulevel']=$ulevelup['ylevel'];
//		edit_update_cl('member',$us_update,$ulevelup['uid']);
//		$us=que_select_cl('member',$ulevelup['uid']);
//		$us_update['ulevel']=$us['ylevel'];
//	
////		$us_update['zsq']=$us['zsq']+$ulevelup['cha'];
//		edit_delete_cl('ulevelup',$id);
//	}
//	echo "<script language=javascript>alert('删除完成.');window.location.href='?'</script>";
//}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="../js/calendar.js"></script>
<title>升级申请</title>
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
<script language="javascript"> 
<!--     
//导出excel
function exportExcel(DivID){
 //先声明Excel插件、Excel工作簿等对像
 var jXls, myWorkbook, myWorksheet;
 
 try {
  //插件初始化失败时作出提示
  jXls = new ActiveXObject('Excel.Application');
 }catch (e) {
  alert("无法启动Excel!\n\n如果您确信您的电脑中已经安装了Excel，"+"那么请调整IE的安全级别。\n\n具体操作：\n\n"+"工具 → Internet选项 → 安全 → 自定义级别 → 对没有标记为安全的ActiveX进行初始化和脚本运行 → 启用");
  return false;
 }
 
 //不显示警告 
 jXls.DisplayAlerts = false;
 
 //创建AX对象excel
 myWorkbook = jXls.Workbooks.Add();
 //myWorkbook.Worksheets(3).Delete();//删除第3个标签页(可不做)
 //myWorkbook.Worksheets(2).Delete();//删除第2个标签页(可不做)
 
 //获取DOM对像
 var curTb = document.getElementByIdx_x(DivID);
 
 //获取当前活动的工作薄(即第一个)
 myWorksheet = myWorkbook.ActiveSheet; 
 
 //设置工作薄名称
 myWorksheet.name="NP统计";
 
 //获取BODY文本范围
 var sel = document.body.createTextRange();
 
 //将文本范围移动至DIV处
 sel.moveToElementText(curTb);
 
 //选中Range
 sel.select();
 
 //清空剪贴板
 window.clipboardData.setData('text','');
 
 //将文本范围的内容拷贝至剪贴板
 sel.execCommand("Copy");
 
 //将内容粘贴至工作簿
 myWorksheet.Paste();
 
 //打开工作簿
 jXls.Visible = true;
 
 //清空剪贴板
 window.clipboardData.setData('text','');
 jXls = null;//释放对像
 myWorkbook = null;//释放对像
 myWorksheet = null;//释放对像
}
-->
</script>
</head>
<body>
<form name="form1" method="post" action="?">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="4" colspan="9" align="left">
          <select name="SearchType" id="SearchType">
            <option value="1">会员编号</option>
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="btn1" value="搜索"></td>
        <td height="4" align="center"><input type="button" name="dayin" id="dayin" class="btn1" value="导出表格" onClick="exportExcel('daochu')" style="display:none"></td>
      </tr>
      <tr>
        <td height="5" colspan="10" align="left">搜索时间范围：
          <input type="text" name="TimeStart" id="TimeStart" style="width:100px" onFocus="HS_setDate(this)">
          至
          <input type="text" name="TimeEnd" id="TimeEnd" style="width:100px" onFocus="HS_setDate(this)"></td>
      </tr>
      <div id="daochu">
      <tr >
        <td colspan="10" align="center">四级申 请</td>
      </tr>
      <tr>
      	<td height="21" align="center"><input type="checkbox" name="checkbox" value="checkbox" onClick="javascript:SelectAll()"></td>
        
        <td align="center">申请人编号</td>
        <td align="center">申请人姓名</td>
        <td align="center">原级别</td>
        <td align="center">申请级别</td>
        <td align="center">补单金额</td>
        <td align="center">申请时间</td>
        <td align="center">上层审批人编号</td>
<!--      	<td align="center">上层收款人姓名</td>-->
        <td  align="center">状态</td>
        <td  align="center">确认时间</td>
        </tr>
      <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `ulevelup` WHERE ylevel=3 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
      	$sql = "SELECT * FROM `ulevelup` WHERE ylevel=3 ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by udate desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$yul=ulevel($row['ylevel']);
			$uul=ulevel($row['uplevel']);
	  ?>
      <tr>
      	<td height="21" align="center"><input type="checkbox" name="UID[]" id="UID" value="<?=$row['id']?>"></td>
                <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>

         <?php if ($yul['ulevel']){?>
        <td align="center"><?=$yul['lvname']?></td>
        <?php }else{?>
         <td align="center">零级会员</td>
        <?php }?>
        <td align="center"><?=$uul['lvname']?></td>
       <td align="center"><?=$row['cha']?></td>
        <td align="center"><?=$row['udate']?></td>
         <td align="center"><?=$row['snickname']?></td>
<!--        <td align="center"><?=$row['susername']?></td>-->
        <td   align="center"><?php if ($row['issh']==1 && $row['issh2']==1){echo '通过审核';}elseif($row['issh']==1 && $row['issh2']==0){echo '<font color="#FF0000">前台未审核</font>';}elseif($row['issh']==0 && $row['issh2']==1){echo '<font color="#FF0000">后台未审核</font>';}else{echo '未审核';}?></td>
        <td align="center"><?=$row['rdate']?></td> </tr>
      <?php
			}
		}
	  ?>
      </div>
      <tr>
        <td height="21" colspan="10" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="left"><input name="button" type="submit" class="button_green" class="btn1" id="button" value="确认升级" onClick="{if(confirm('您确定要进行升级确认吗?')){this.document.selform.submit();return true;}return false;}">
            <input name="button4" type="submit" class="button_red" class="btn3" id="button4" value="删除记录" onClick="{if(confirm('您确定要删除该记录吗?')){this.document.selform.submit();return true;}return false;}"></td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
  </table>
    </form>
</body>
</html>