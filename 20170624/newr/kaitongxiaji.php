<?php
include("../member/check.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/member_class.php");
include_once("../class/ulevel_class.php");

$information=que_select_cl('information',1);
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
$member = getMemberbyID($_SESSION['ID']);
//var_dump($_SESSION['ID']);
$ul = ulevel($member['ulevel']);
#充值确认
if ($_POST['button']){
$cheuid_arr = $_POST['UID'];
	$_bonus=new bonus_class();
	$_member=new member_class();
	$_ulevel_class=new ulevel_class();
	foreach ((array)$cheuid_arr as $id)
	{
		
		$ulevelup=que_select_cl('ulevelup',$id);
// 		if ($ulevelup['issh']==1){
			$us=que_select_cl('member',$ulevelup['uid']);	//$us是升级会员的信息
			$rs=que_select_cl('member',$ulevelup['sid']); 	//$rs是审批会员的信息
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
			if($us['ulevel']==0 || $us['ulevel']==3){
				$ulevelup['issh2']=1;
			}else{
				$ulevelup['issh']=1;
				$ulevelup['issh2']=1;
			}
			edit_update_cl('ulevelup',$ulevelup,$ulevelup['id']);
			if($ulevelup['issh']==1 && $ulevelup['issh2']==1){
				edit_update_cl('member',$us_update,$us['id']);	////升级写入数据库
			}
			edit_update_cl('member',$rs_update,$rs['id']);
			
//    		edit_update_cl('ulevelup',$cc_xiugai,$id);
//			$shengyu=$_bonus->b1bonus($us['id'],$us['reid'],$ulevelup['cha']);
//			$_member->addArea($us['id'],$us['treeplace'],$shengyu);
			$_systemyeji=new system_class();
			$_systemyeji->yejitongji(0,0,$ulevelup['cha'],0,0,0,0);
			
			
// 		}else {
// 			$us=que_select_cl('member',$ulevelup['uid']);	//$us是升级会员的信息
// 			$rs=que_select_cl('member',$ulevelup['sid']); 	//$rs是审批会员的信息
// 			if($us['ulevel']!=0){
// 				$cc_xiugai['issh']=1;
// 				$cc_xiugai['issh2']=1;
// 			}else{
// 				$cc_xiugai['issh2']=1;
// 			}
// 			edit_update_cl('ulevelup',$cc_xiugai,$id);
// 			dit_update_cl('member',$us_update,$us['id']);
// 		}
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
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
</head>
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
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <div class="span3" style=" margin-top:15px;">
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">公告栏</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2" style=" padding:0 10px;">
            <marquee onMouseOver="this.stop()" onMouseOut="this.start()" scrollamount="1" scrolldelay="60" direction="up" align="middle" height="139">
            <tr>
            <td><img style=" width:100px;height:100px; " src="img/gsewm.jpg"/></td>
			<td valign="top" ><?=$information['company']?><p></p></td>
			</tr>
            </marquee>
          </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">会员资料</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2">
            <dl class="dl-horizontal">
              <dt>会员编号：</dt>
              <dd><?php echo $member['nickname'];?></dd>
              <dt>会员昵称：</dt>
              <dd><?php echo $member['username'];?></dd>
              <dt>会员状态：</dt>
              <dd><?php if($member['ulevel']>=1){echo '正式会员';}else{echo '无';}?></dd>
              <dt>会员级别：</dt>
              <dd><?php if($ul['lvname']!=''){echo $ul['lvname'];}else{echo '无';}?></dd>
			  <?php 
				$sql="select * from member where ppath like '%{$member['ppath']}%'";
				if($query=mysql_query($sql)){
					$num=mysql_num_rows($query);
				}
			?>
              <dt>团队会员数：</dt>
              <dd><?php if(($num-1)!=0){echo $num-1;}else{echo '无';}?></dd>
            </dl>
          </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">会员管理</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2">
            <ul class="index_shengji">
              <li style=" margin-left:-1px; border-right:1px #8d8e12 dashed;"><a href="test.php?yid=shenqingshengji.php">申请升级</a></li>
              <li><a href="test.php?yid=tuanduijiegou.php">团队结构</a></li>
              <li style=" margin-left:-1px; border-right:1px #8d8e12 dashed;"><a href="test.php?yid=kaitongxiaji.php">开通下级</a></li>
              <li><a href="test.php?yid=xiugaiziliao.php">修改资料</a></li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
        <div class="widget">
          <div class="widget-header2">
            <h3 style="text-align:center;">开通B网</h3>
          </div>
          <!-- /widget-header -->
          <div class="widget-content2 text-center"> <?php if($member['ulevel']==3){echo '请快速联系您的推荐人:'.$member['rname'];}else{echo '无消息';} ?> </div>
          <!-- /widget-content -->
        </div>
        <!-- /widget -->
      </div>
      <div class="span9" >
	  
	  <div class="widget">
                    
                   
           <div class="page-header">
            <h1>审批开通记录</h1>
          </div>
          
<style>
 .table td { 
	text-align: center; 
}
</style>
          

<div class="table-overflow">    
<form name="form1" method="post" action="?">
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">   

<thead>
      <tr>
        <th height="4" colspan="10" align="left">
        
          <select name="SearchType" id="SearchType" style=" width:120px;">
            <option value="1">会员编号</option>
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="btn" value="搜索" style=" margin-top:-10px;"></td>
        
       <!-- <input type="button" name="dayin" id="dayin" class="btn1" value="导出表格" onClick="exportExcel('daochu')" style="display:none">
        搜索时间范围：
          <input type="text" name="TimeStart" id="TimeStart" style="width:100px" onFocus="HS_setDate(this)">
          至
          <input type="text" name="TimeEnd" id="TimeEnd" style="width:100px" onFocus="HS_setDate(this)">
           -->
        </th>
      </tr>
</thead>

      
      
      <div id="daochu">
<thead>
      <tr >
        <th colspan="10" align="center">升 级 申 请</td>
      </tr>
      </thead>
<thead>
      <tr>
      	<th height="21" align="center"><input type="checkbox" name="checkbox" value="checkbox" onClick="javascript:SelectAll()"></th>
        
        <th align="center">申请人编号</th>
        <th align="center">申请人昵称</th>
        <th align="center">原级别</th>
        <th align="center">申请级别</th>
       <th align="center">升级费用</th>
        <th align="center">申请时间</th>
        <th align="center">审批人编号</th>
<!--      	<th align="center">上层收款人姓名</th>-->
        <th  align="center">状态</th>
        <th  align="center">确认时间</th>
        </tr>
   </thead>

<tbody>  
        
      <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `ulevelup` WHERE sid=".$_SESSION['ID']." ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
      	$sql = "SELECT * FROM `ulevelup` WHERE sid=".$_SESSION['ID']." ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by udate desc limit ".$start.",".$pagesize;
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
        <td align="center"><?=$row['rdate']?></td>
         </tr>
      <?php
			}
		}
	  ?>
      
      
      
      </div>
      <tr>
      <td align="left" colspan="3"><input name="button" type="submit" class="btn" id="button" value="确认升级" onClick="{if(confirm('您确定要进行升级确认吗?')){this.document.selform.submit();return true;}return false;}">
            <input name="button4" type="submit" class="btn" id="button4" value="删除记录" onClick="{if(confirm('您确定要删除该记录吗?')){this.document.selform.submit();return true;}return false;}"></td>
            <td align="right" colspan="7" ><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td></td>
      </tr>
      
<tbody>  
      
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
