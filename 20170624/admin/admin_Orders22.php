<?php
include("admin_check.php");
include_once("../function.php");
include_once("../class/member_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
checkqx(4,14);
#搜索商品
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	$TimeStart=$_POST['TimeStart'];
	$TimeEnd=$_POST['TimeEnd'];
	if ($TimeStart!=NULL){
		
		$_SESSION['TimeStart']=$TimeStart;
		if ($TimeEnd==NULL){
			$_SESSION['TimeEnd']=now();	
		}else {
			$_SESSION['TimeEnd']=$TimeEnd;
		}
		
		
		
	}else{
		
		$_SESSION['TimeStart']='2016-09-01';	
		if ($TimeEnd==NULL){
			$_SESSION['TimeEnd']=now();
		}else {
			$_SESSION['TimeEnd']=$TimeEnd;
		}		
	}
	if ($SearchContent!=NULL){
		$SearchType=$_POST['SearchType'];
		if ($SearchType==1){
			#搜索订单编号
			$_SESSION['Search']="and ordersnumber like '%".$SearchContent."%'";
		}else if($SearchType==2){
			$_SESSION['Search']="and userid like '%".$SearchContent."%'";	
		}else if($SearchType==3){
			$_SESSION['Search']="and username like '%".$SearchContent."%'";
		}else if($SearchType==4){
			$_SESSION['Search']="and bnickname like '%".$SearchContent."%'";
		}
	}else{
		$_SESSION['Search']=NULL;	
	}
}else{
	if ($_GET['page']==NULL){
		$_SESSION['TimeStart']='2016-09-01';	
		$_SESSION['TimeEnd']=now();
	}
}

$sql = "SELECT * FROM `orders2` WHERE issend=0 and isqr=1 ".$_SESSION['Search']." and date>='".$_SESSION['TimeStart']."' and date<='".$_SESSION['TimeEnd']."'";
$arr=getall($sql);
$wjine=0;

foreach ($arr as $key =>$row){
	$wjine=$wjine+$row['jine'];
}
$sql = "SELECT * FROM `orders2` WHERE issend=1 ".$_SESSION['Search']." and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
$arr=getall($sql);
$fjine=0;

foreach ($arr as $key =>$row){
	$fjine=$fjine+$row['jine'];
}
$sql = "SELECT * FROM `orders2` WHERE issend=2 ".$_SESSION['Search']." and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
$arr=getall($sql);
$tjine=0;

foreach ($arr as $key =>$row){
	$tjine=$tjine+$row['jine'];
}
$sql = "SELECT * FROM `orders2` WHERE issend=3 ".$_SESSION['Search']." and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
$arr=getall($sql);
$sjine=0;

foreach ($arr as $key =>$row){
	$sjine=$sjine+$row['jine'];
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="../js/calendar.js"></script>
<title>订单发货</title>
<style type="text/css">
*{margin:0; padding:0; font-size:12px;}
#tablit {margin:0px;width:100%; height:400; border:#BCE2F3 1px solid;padding-top:10px;background:#E4F2FB;}
#tablit dl{ float:left; width:100%;}
#tablit dl dt{float:left;border-bottom:#64B8E4 1px solid; width:15px; height:31px; line-height:30px;}
#tablit dl dd{float:left;width:110px;height:30px; line-height:30px; text-align:center;}
#tablit .on{
	border:#64B8E4 1px solid;
	border-bottom:#FFF 1px solid;
	color:#FF6600;
	background:#FFF;
	font-weight: bold;
}
#tablit .out{
	border:#64B8E4 1px solid;
	color:#000;
	background:#64B8E4;
	font-weight: bold;
}
.tabcon{width:100%; height:100%; background: #FFF; clear:both;}
.dis{display:none;}
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
    <div>
    <select name="SearchType" id="SearchType">
            <option value="1">订单编号</option>
            <option value="2">会员编号</option>
            <option value="3">会员姓名</option>
            <option value="4">经销商</option>
      </select>
          <input type="text" name="SearchContent" id="SearchContent">
          搜索时间范围：
          <input type="text" name="TimeStart" id="TimeStart" style="width:100px" onFocus="HS_setDate(this)">
          至
          <input type="text" name="TimeEnd" id="TimeEnd" style="width:100px" onFocus="HS_setDate(this)">
        <input type="submit" name="Search" id="Search" class="btn1" value="搜索">
        
        
    </div>
    <div id="tablit">
    <dl>
        <dt></dt>
        <dd class="on">未发货订单详情</dd>
        <dt></dt>
        <dd class="out">已发货订单详情</dd>
         
        <dt></dt>
        <dd class="out">退款订单详情</dd>
        
        <dt></dt>
        <dd class="out">收货订单详情</dd>
        <dt></dt>
       
    </dl>

    <!--第三个选项卡-->
<div class="tabcon">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="10" colspan="16" align="center">订单详情</td>
       
      </tr>
      <tr>
       
        <td height="10" colspan="16" align="left">合计金额：<?php echo $wjine?></td>
      </tr>
      <tr>
      	
        
        <td align="center">订单编号</td>
        <td align="center">订单类型</td>
        <td align="center">商品名称</td>
        <td align="center">商品价格</td>
        <td align="center">商品数量</td>
        <td align="center">订单金额</td>
        <td align="center">物流公司</td>
        <td align="center">物流编号</td>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">联系电话</td>
        <td align="center">联系地址</td>
        <td align="center">订单时间</td>
      
        <td align="center">状态</td>
        <td align="center">操作</td>
        </tr>
      <?php
      
     
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `orders2` WHERE isqr=1 and issend=0 ".$_SESSION['Search']." and date>='".$_SESSION['TimeStart']."' and date<='".$_SESSION['TimeEnd']."'";
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
      	$sql = "SELECT * FROM `orders2` WHERE isqr=1 and issend=0 ".$_SESSION['Search']." and date>='".$_SESSION['TimeStart']."' and date<='".$_SESSION['TimeEnd']."' order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
      
        
        <td align="center"><?=$row['ordersnumber']?></td>
        <td align="center">购物商品</td>
        <td align="center"><?=$row['goodname']?></td>
        <td align="center"><?=$row['price']?></td>
        <td align="center"><?=$row['num']?></td>
        <td align="center"><?=$row['jine']?></td>
        <td align="center"><?=$row['logistics']?></td>
        <td align="center"><?=$row['logisticsno']?></td>
        <td align="center"><?=$row['userid']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['usertel']?></td>
        <td align="center"><?=$row['useraddress']?></td>
        <td align="center"><?=$row['date']?></td>
       
        <td align="center"><?php if($row['issend']==0){?>未发货<?php }else if($row['issend']==1){ ?>已发货<?php }else if($row['issend']==2){?>已退款<?php }?></td>
         <td align="center"><input type="button" class="button" id="button3" name="button3" value="查看" onClick="window.location.href='admin_ordercontent2.php?oid=<?=$row['id']?>&page=<?=$p?>'" /></td>
     
          </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="16" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="left">
            <!--  
            <input name="button" type="submit" class="btn1" id="button" value="发货" onClick="{if(confirm('您确定要发货吗?')){this.document.selform.submit();return true;}return false;}">
            
            <input name="button2" type="submit" class="btn3" id="button2" value="退款" onClick="{if(confirm('您确定要退款吗?')){this.document.selform.submit();return true;}return false;}">
            -->
           </td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </div>
 <!--第三个选项卡结束-->

 <!--第四个选项卡-->
 <div class="tabcon dis">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="10" colspan="16" align="center">订单详情</td>
      </tr>
       <tr>
       
        <td height="10" colspan="16" align="left">合计金额：<?php echo $fjine?></td>
      </tr>
      <tr>
      	
        
        <td align="center">订单编号</td>
        <td align="center">订单类型</td>
        <td align="center">商品名称</td>
        <td align="center">商品价格</td>
        <td align="center">商品数量</td>
        <td align="center">订单金额</td>
        <td align="center">物流公司</td>
        <td align="center">物流编号</td>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">联系电话</td>
        <td align="center">联系地址</td>
      
        <td align="center">发货时间</td>
        <td align="center">状态</td>
        <td align="center">操作</td>
       
        </tr>
      <?php
      
     
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `orders2` WHERE isqr=1 and issend=1 ".$_SESSION['Search']." and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."'";
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
      	$sql = "SELECT * FROM `orders2` WHERE isqr=1 and issend=1 ".$_SESSION['Search']." and sdate>='".$_SESSION['TimeStart']."' and sdate<='".$_SESSION['TimeEnd']."' order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
      	
        
        <td align="center"><?=$row['ordersnumber']?></td>
        <td align="center">购物商品</td>
        <td align="center"><?=$row['goodname']?></td>
        <td align="center"><?=$row['price']?></td>
        <td align="center"><?=$row['num']?></td>
        <td align="center"><?=$row['jine']?></td>
        <td align="center"><?=$row['logistics']?></td>
        <td align="center"><?=$row['logisticsno']?></td>
        <td align="center"><?=$row['userid']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['usertel']?></td>
        <td align="center"><?=$row['useraddress']?></td>
       
        <td align="center"><?=$row['sdate']?></td>
        <td align="center"><?php if($row['issend']==0){?>未发货<?php }else if($row['issend']==1){ ?>已发货<?php }else if($row['issend']==2){?>已退款<?php }?></td>
          <td align="center"><input type="button" class="button" id="button3" name="button3" value="查看" onClick="window.location.href='admin_ordercontent2.php?oid=<?=$row['id']?>&page=<?=$p?>'" /></td>
     
          </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="16" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="left">
            <input name="button4" style="display:none;" type="submit" class="btn3" id="button4" value="删除" onClick="{if(confirm('您确定要删除订单吗?')){this.document.selform.submit();return true;}return false;}">
            </td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </div>
 <!--第四个选项卡结束-->
 
 <div class="tabcon dis">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="10" colspan="16" align="center">订单详情</td>
      </tr>
       <tr>
       
        <td height="10" colspan="16" align="left">合计金额：<?php echo $tjine?></td>
      </tr>
      <tr>
      	
        
        <td align="center">订单编号</td>
        <td align="center">订单类型</td>
        <td align="center">商品名称</td>
        <td align="center">商品价格</td>
        <td align="center">商品数量</td>
        <td align="center">订单金额</td>
        <td align="center">物流公司</td>
        <td align="center">物流编号</td>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">联系电话</td>
        <td align="center">联系地址</td>
        <td align="center">订单时间</td>
      
        <td align="center">状态</td>
        <td align="center">操作</td>
        </tr>
      <?php
      
     
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `orders2` WHERE issend=2 ".$_SESSION['Search']." and date>='".$_SESSION['TimeStart']."' and date<='".$_SESSION['TimeEnd']."'";
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
      	$sql = "SELECT * FROM `orders2` WHERE issend=2 ".$_SESSION['Search']." and date>='".$_SESSION['TimeStart']."' and date<='".$_SESSION['TimeEnd']."' order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
      	
        
        <td align="center"><?=$row['ordersnumber']?></td>
        <td align="center">购物商品</td>
        <td align="center"><?=$row['goodname']?></td>
        <td align="center"><?=$row['price']?></td>
        <td align="center"><?=$row['num']?></td>
        <td align="center"><?=$row['jine']?></td>
        <td align="center"><?=$row['logistics']?></td>
        <td align="center"><?=$row['logisticsno']?></td>
        <td align="center"><?=$row['userid']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['usertel']?></td>
        <td align="center"><?=$row['useraddress']?></td>
        <td align="center"><?=$row['date']?></td>
       
        <td align="center"><?php if($row['issend']==0){?>未发货<?php }else if($row['issend']==1){ ?>已发货<?php }else if($row['issend']==2){?>已退款<?php }?></td>
         <td align="center"><input type="button" class="button" id="button3" name="button3" value="查看" onClick="window.location.href='admin_ordercontent2.php?oid=<?=$row['id']?>&page=<?=$p?>'" /></td>
     
          </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="16" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="left">
            
            <input name="button" type="submit" class="btn1" id="button" value="发货" onClick="{if(confirm('您确定要发货吗?')){this.document.selform.submit();return true;}return false;}">
            
            <input name="button2" type="submit" class="btn3" id="button2" value="退款" onClick="{if(confirm('您确定要退款吗?')){this.document.selform.submit();return true;}return false;}">
             
           </td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </div>
    
 <!--第三个选项卡结束-->
 
 <div class="tabcon dis">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="10" colspan="16" align="center">订单详情</td>
      </tr>
       <tr>
       
        <td height="10" colspan="16" align="left">合计金额：<?php echo $sjine?></td>
      </tr>
      <tr>
      	
        
        <td align="center">订单编号</td>
        <td align="center">订单类型</td>
        <td align="center">商品名称</td>
        <td align="center">商品价格</td>
        <td align="center">商品数量</td>
        <td align="center">订单金额</td>
        <td align="center">物流公司</td>
        <td align="center">物流编号</td>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">联系电话</td>
        <td align="center">联系地址</td>
        <td align="center">订单时间</td>
      
        <td align="center">状态</td>
        <td align="center">操作</td>
        </tr>
      <?php
      
     
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `orders2` WHERE isqr=1 and issend=3 ".$_SESSION['Search']." and date>='".$_SESSION['TimeStart']."' and date<='".$_SESSION['TimeEnd']."'";
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
      	$sql = "SELECT * FROM `orders2` WHERE isqr=1 and issend=3 ".$_SESSION['Search']." and date>='".$_SESSION['TimeStart']."' and date<='".$_SESSION['TimeEnd']."' order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
      	
        
        <td align="center"><?=$row['ordersnumber']?></td>
        <td align="center">购物商品</td>
        <td align="center"><?=$row['goodname']?></td>
        <td align="center"><?=$row['price']?></td>
        <td align="center"><?=$row['num']?></td>
        <td align="center"><?=$row['jine']?></td>
        <td align="center"><?=$row['logistics']?></td>
        <td align="center"><?=$row['logisticsno']?></td>
        <td align="center"><?=$row['userid']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['usertel']?></td>
        <td align="center"><?=$row['useraddress']?></td>
        <td align="center"><?=$row['date']?></td>
       
      <td align="center"><?php if($row['issend']==0){?>未发货<?php }else if($row['issend']==1){ ?>已发货<?php }else if($row['issend']==2){?>已退款<?php }else if($row['issend']==3){?>已收货<?php }?></td>
         <td align="center"><input type="button" class="button" id="button3" name="button3" value="查看" onClick="window.location.href='admin_ordercontent2.php?oid=<?=$row['id']?>&page=<?=$p?>'" /></td>
     
          </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="16" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="left">
            <!-- 
            <input name="button" type="submit" class="btn1" id="button" value="发货" onClick="{if(confirm('您确定要发货吗?')){this.document.selform.submit();return true;}return false;}">
            
            <input name="button2" type="submit" class="btn3" id="button2" value="退款" onClick="{if(confirm('您确定要退款吗?')){this.document.selform.submit();return true;}return false;}">
             -->
           </td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </div>
</div>
   </form> 
</body>

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
</html>