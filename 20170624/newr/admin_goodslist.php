<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/email_class.php");
include_once("../class/system_class.php");
date_default_timezone_set("PRC");
header("Content-Type: text/html;charset=utf-8");
session_start();
$uid=$_SESSION['ID'];
#搜索商品
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	$TimeStart=$_POST['TimeStart'];
	$TimeEnd=$_POST['TimeEnd'];
	if ($TimeStart!=NULL){
		if ($TimeEnd==NULL){
			$TimeEnd=now();
		}
		$_SESSION['SearchTime']="and gdate>='".$TimeStart."' and gdate<='".$TimeEnd."'";
	}else{
		$_SESSION['SearchTime']=NULL;
	}
	if ($SearchContent!=NULL){
		$SearchType=$_POST['SearchType'];
		if ($SearchType==1){
			#搜索商品名称
			$_SESSION['Search']="and goodsname like '%".$SearchContent."%'";
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

#发布新闻
if ($_POST['button']){
	$cheuid_arr = $_POST['UID'];
	$goods['isdisplay']=1;
	foreach ((array)$cheuid_arr as $id)
	{
		edit_update_cl('goods',$goods,$id);
	}
	echo "<script language=javascript>alert('商品发布完成.');window.location.href='?'</script>";
}

#停止发布
if ($_POST['button2']){
	$cheuid_arr = $_POST['UID'];
	$goods['isdisplay']=0;
	foreach ((array)$cheuid_arr as $id)
	{
		edit_update_cl('goods',$goods,$id);
	}
	echo "<script language=javascript>alert('商品已停止发布.');window.location.href='?'</script>";
}

#删除新闻
if ($_POST['button4']){
	$cheuid_arr = $_POST['UID'];
	foreach ((array)$cheuid_arr as $id)
	{
		edit_delete_cl('goods',$id);
	}
	echo "<script language=javascript>alert('删除商品完成.');window.location.href='?'</script>";
}	


?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<script src="../js/calendar.js"></script>
<script language="javascript">
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
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <?php include 'leftsider.php';?>
      <div class="span9" >
    <div class="widget">
                    
                   
           <div class="page-header">
            <h1>商品管理</h1>
          </div>
          
      <div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
      
      
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
	

<div class="ziti"> <select name="SearchType" id="SearchType">
            <option value="1">商品名称</option>
          </select>
          <input type="text" name="SearchContent" id="SearchContent">搜索时间范围：
           <input type="text" name="TimeStart" id="TimeStart" style="width:100px" onFocus="HS_setDate(this)">
          至
          <input type="text" name="TimeEnd" id="TimeEnd" style="width:100px" onFocus="HS_setDate(this)">
        <input type="submit" name="Search" id="Search" class="btn1" value="搜索"></div>

<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">
         <tr>
        <td height="10" colspan="10" align="center">商品管理</td>
      </tr>
      <tr>
      	<td height="21" align="center">全选
      	  <input type="checkbox" name="checkbox" value="checkbox" onClick="javascript:SelectAll()"></td>
        <td align="center">商品名称</td>
        <td align="center">商品价格</td>
<!--        <td align="center" >商品PV</td>-->
        <td align="center">商品类型</td>
        <td align="center">库存</td>
        <td align="center">销量</td>
        <td align="center">发布时间</td>
        <td align="center">是否发布</td>
        <td align="center">操作</td>
        </tr>
      <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `goods` WHERE uid=$uid ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
      	$sql = "SELECT * FROM `goods` WHERE uid=$uid ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
      	<td height="21" align="center"><input type="checkbox" name="UID[]" id="UID" value="<?=$row['id']?>"></td>
        <td align="center" width="120"><?=$row['goodsname']?></td>
        <td align="center"><?=$row['price']?></td>

        <td align="center" ><?php 
        switch($row['lx']){
        	case 1:echo "购物商品";break;
        	case 2:echo "复投币商品";break;
        	case 3:echo "重消商品";break;
        	case 4:echo "二次购物商品";break;
        }
        ?></td>
        <td align="center"><?=$row['kucun']?></td>
        <td align="center"><?=$row['sales']?></td>
        <td align="center"><?=$row['gdate']?></td>
        <td align="center"><?php if ($row['isdisplay']==1){?>已发布<?php }else{?><font color="#FF0000">未发布</font><?php }?></td>
        <td align="center">
          <input type="button" class="button" id="button3" name="button3" value="查看" onClick="window.location.href='../newr/goodscontent.php?id=<?=$row['id']?>'" />&nbsp;
          <input type="button" class="button" id="button5" name="button5" value="修改" onClick="window.location.href='../newr/admin_goodsupdate.php?id=<?=$row['id']?>'" /></td>
      </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="10" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="left">
            
            <input name="button" type="submit" class="btn1" id="button" value="发布商品" onClick="{if(confirm('您确定要发布商品吗?')){this.document.selform.submit();return true;}return false;}">
            
            <input name="button2" type="submit" class="btn3" id="button2" value="停止发布" onClick="{if(confirm('您确定要停止发布商品吗?')){this.document.selform.submit();return true;}return false;}">
            <input name="button4" type="submit" class="btn3" id="button4" value="删除商品" onClick="{if(confirm('您确定要删除商品吗?')){this.document.selform.submit();return true;}return false;}">
            </td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
  </table>
 <script type="text/javascript">

var mDD = document.getElementById("tablit").getElementsByTagName("dd");
var mDIV= document.getElementById("tablit").getElementsByTagName("div");


for (var i=0;i<mDD.length;i++){
 (function(index) {
  mDD[index].onmouseover = function() {
   if (mDD[index].className == 'out') {
    for (var j = 0; j < mDD.length; j++) {
     mDD[j].className = 'out';
     mDIV[j].style.display = 'none';
    }
    mDD[index].className = 'on';
    mDIV[index].style.display = 'block';
   }
  }

 })(i);
}

</script> 
</form>
</div>
</div>

   
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

