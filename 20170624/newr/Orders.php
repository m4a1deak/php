<?php
include("../member/check.php");
include("../member/check2.php");
// include("./member/check.php");
// include("check2.php");
include_once("../function.php");
include_once("../class/member_class.php");

header("Content-Type: text/html;charset=utf-8");
session_start();

#搜索商品
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	$TimeStart=$_POST['TimeStart'];
	$TimeEnd=$_POST['TimeEnd'];
	if ($TimeStart!=NULL){
		if ($TimeEnd==NULL){
			$TimeEnd=now();	
		}
		$_SESSION['SearchTime']="and (cdate>='".$TimeStart."' and cdate<='".$TimeEnd."') or (sdate>='".$TimeStart."' and sdate<='".$TimeEnd."')";	
	}else{
		$_SESSION['SearchTime']=NULL;		
	}
	if ($SearchContent!=NULL){
		$SearchType=$_POST['SearchType'];
		if ($SearchType==1){
			#搜索订单编号
			$_SESSION['Search']="and ordersnumber like '%".$SearchContent."%'";
		}else if($SearchType==2){
			$_SESSION['Search']="and userid like '%".$SearchContent."%'";	
		}else if($SearchType==2){
			$_SESSION['Search']="and username like '%".$SearchContent."%'";
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
if ($_POST['button2']){

	$id=$_GET['id'];
	
		$bonus_cl=new bonus_class();
		$orders=que_select_cl("orders1",$id);
		//echo $id;
		if ($orders['issend']==1){
			$orders['issend']=3;
			$orders['sdate']=now();
			edit_update_cl('orders1',$orders,$id);
			//计算个人业绩
			
			//$sql = "SELECT id,yl1 FROM ulevel where id=1";
			//$ad=getOne($sql);
			//$num=intval($orders['jine']/$ad['yl1']);//分红点
			
			
			//edit_sql("update `member` set lsk=lsk+".$orders['jine'].",num=num+{$num} where id=".$orders['uid']."");
			//计算服务中心业绩
			//edit_sql("update `member` set area1=area1+".$orders['jine'].",area2=area2+".$orders['jine']." where id=".$orders['bid']."");
			//edit_sql("update `systemparameters` set yeji=yeji+".$orders['jine']."  where id=1");
			//计算奖金
			
			//$bonus_cl->b2bonus($orders['uid'],$orders['jine']);//推荐会员
			
			//$bonus_cl->b0bonus();
			
			
			echo "<script language=javascript>alert('订单确认收货.');window.location.href='?'</script>";
		}else {
			echo "<script language=javascript>alert('该订单发货已收货.');window.location.href='?'</script>";
		}
	
	
}
if ($_POST['button4']){

	$id=$_GET['id'];

	$bonus_cl=new bonus_class();
	$orders=que_select_cl("orders2",$id);
	//echo $id;
	if ($orders['issend']==1){
		$orders['issend']=3;
		$orders['sdate']=now();
		edit_update_cl('orders2',$orders,$id);
		//计算个人业绩
			
		//$sql = "SELECT id,yl1 FROM ulevel where id=1";
		//$ad=getOne($sql);
		//$num=intval($orders['jine']/$ad['yl1']);//分红点
			
			
		//edit_sql("update `member` set lsk=lsk+".$orders['jine'].",num=num+{$num} where id=".$orders['uid']."");
		//计算服务中心业绩
		//edit_sql("update `member` set area1=area1+".$orders['jine'].",area2=area2+".$orders['jine']." where id=".$orders['bid']."");
		//edit_sql("update `systemparameters` set yeji=yeji+".$orders['jine']."  where id=1");
		//计算奖金
			
		//$bonus_cl->b2bonus($orders['uid'],$orders['jine']);//推荐会员
			
		//$bonus_cl->b0bonus();
			
			
		echo "<script language=javascript>alert('订单确认收货.');window.location.href='?'</script>";
	}else {
		echo "<script language=javascript>alert('该订单发货已收货.');window.location.href='?'</script>";
	}


}

if ($_POST['button3']){
	$id = $_GET['id'];
	
		$orders=que_select_cl('orders1',$id);
		if ($orders['issend']==0){
			$member=que_select_cl('member',$orders['uid']);
			$upmember['zsq']=$member['zsq']+$orders['sgb'];
			//$upmember['gwb']=$member['gwb']+$orders['gwb'];
			edit_update_cl('member',$upmember,$member['id']);
			$uporders['issend']=2;
			$uporders['sdate']=now();
			edit_update_cl('orders1',$uporders,$id);
		
		    echo "<script language=javascript>alert('退款完成.');window.location.href='?'</script>";
		}else {
			echo "<script language=javascript>alert('该订单发货已发货,不能退货.');window.location.href='?'</script>";
		}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<SCRIPT LANGUAGE=javascript>

function SelectAll() {
	
	for (var i=0;i<document.form1.UID.length;i++) {
		var e=document.form1.UID[i];
		e.checked=!e.checked;
	}
}



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
            <h1>我的订单</h1>
          </div>
		<div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
      
	
    <select name="SearchType" id="SearchType">
            <option value="1">订单编号</option>
      </select>
          <input type="text" name="SearchContent" id="SearchContent">
          搜索时间范围：
          <input type="text" name="TimeStart" id="TimeStart" style="width:100px" onFocus="HS_setDate(this)">
          至
          <input type="text" name="TimeEnd" id="TimeEnd" style="width:100px" onFocus="HS_setDate(this)">
        <input type="submit" name="Search" id="Search" class="button_blue" value="搜  索">
    </div>
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">
      <tr>
        <td height="10" colspan="12" align="center">报单订单详情</td>
      </tr>
      <tr>
        <td align="center">订单编号</td>
        <td align="center">物流公司</td>
        <td align="center">物流编号</td>
        <td align="center">收件编号</td>
        <td align="center">发件姓名</td>
       
        <td align="center">联系电话</td>
        <td align="center">联系地址</td>
         
        <td align="center">订单时间</td>
         <!--
        <td align="center">发货时间</td>
        -->
        <td align="center">状态</td>
        <td align="center">操作</td>
    </tr>
      <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `orders1` WHERE  isqr=1 and uid='".$_SESSION['ID']."'"." ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
      	$sql = "SELECT * FROM `orders1` WHERE  isqr=1 and uid='".$_SESSION['ID']."'"." ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by id desc limit ".$start.",".$pagesize;
      //	print_r($_SESSION);
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
        <form name="form1" method="post" action="?id=<?=$row['id']?>" >	
        <td align="center"><?=$row['ordersnumber']?></td>
        <td align="center"><?=$row['logistics']?></td>
        <td align="center"><?=$row['logisticsno']?></td>
        <td align="center"><?=$row['userid']?></td>
        <td align="center"><?=$row['username']?></td>
       
        <td align="center"><?=$row['usertel']?></td>
        <td align="center"><?=$row['useraddress']?></td>
         
        <td align="center"><?=$row['date']?></td>
        <!-- 
        <td align="center"><?=$row['sdate']?></td>
        -->
        <td align="center"><?php if($row['issend']==0){?>未发货<?php }else if($row['issend']==1){ ?>已发货<?php }else if($row['issend']==2){?>已退款<?php }elseif($row['issend']==3){?>已收货<?php }elseif($row['issend']==4){?>交易完成<?php }?></td>
        <td align="center"><a href="ordercontent2.php?oid=<?=$row['id']?>&page=<?=$p?>" style="text-decoration:none">查看</a>
        <?php if($row['issend']==1){?>
        <input name="button2" type="submit"  class="button_green" id="button2" value="确定收货" onClick="{if(confirm('您确定要确定收货吗?')){this.document.selform.submit();return true;}return false;}" ID=<?=$row['id']?>/>
       <!--  
        <input name="button3" type="submit"  class="button_green" id="button3" value="退款" onClick="{if(confirm('您确定要退款吗?')){this.document.selform.submit();return true;}return false;}" ID=<?=$row['id']?>/>
       -->
        <?php }?>
        </td>
        </form> 
      </tr>
      <?php
			}
		}
	  ?>
    </table>
    <table width="100%" border="0" class="ziti">
    <!--  
          <td align="left"><input name="button" type="submit" class="btn1" id="button" value="发货" onClick="{if(confirm('您确定要发货吗?')){this.document.selform.submit();return true;}return false;}">
            <input name="button2" type="submit" class="btn3" id="button2" value="退款" onClick="{if(confirm('您确定要退款吗?')){this.document.selform.submit();return true;}return false;}">
            <input name="button4" style="display:none;" type="submit" class="btn3" id="button4" value="删除" onClick="{if(confirm('您确定要删除订单吗?')){this.document.selform.submit();return true;}return false;}">
            </td>
            -->
          <tr>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table>
 <table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">
      <tr>
        <td height="10" colspan="12" align="center">购物订单详情</td>
      </tr>
      <tr>
        <td align="center">订单编号</td>
        <td align="center">物流公司</td>
        <td align="center">物流编号</td>
        <td align="center">收件编号</td>
        <td align="center">发件姓名</td>
       
        <td align="center">联系电话</td>
        <td align="center">联系地址</td>
         
        <td align="center">订单时间</td>
     <!--    <td align="center">发货时间</td>
        -->
        <td align="center">状态</td>
        <td align="center">操作</td>
    </tr>
      <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `orders2` WHERE  uid='".$_SESSION['ID']."'"." ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
      	$sql = "SELECT * FROM `orders2` WHERE  uid='".$_SESSION['ID']."'"." ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by id desc limit ".$start.",".$pagesize;
      //	print_r($_SESSION);
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
        <form name="form1" method="post" action="?id=<?=$row['id']?>" >	
        <td align="center"><?=$row['ordersnumber']?></td>
        <td align="center"><?=$row['logistics']?></td>
        <td align="center"><?=$row['logisticsno']?></td>
        <td align="center"><?=$row['userid']?></td>
        <td align="center"><?=$row['username']?></td>
       
        <td align="center"><?=$row['usertel']?></td>
        <td align="center"><?=$row['useraddress']?></td>
          
        <td align="center"><?=$row['date']?></td>
      <!--  <td align="center"><?=$row['sdate']?></td>
        -->
        <td align="center"><?php if($row['issend']==0){?>未发货<?php }else if($row['issend']==1){ ?>已发货<?php }else if($row['issend']==2){?>已退款<?php }elseif($row['issend']==3){?>已收货<?php }elseif($row['issend']==4){?>交易完成<?php }?></td>
        <td align="center"><a href="ordercontent1.php?oid=<?=$row['id']?>&page=<?=$p?>" style="text-decoration:none">查看</a>
        <?php if($row['issend']==1){?>
        <input name="button4" type="submit"  class="button_green" id="button4" value="确定收货" onClick="{if(confirm('您确定要确定收货吗?')){this.document.selform.submit();return true;}return false;}" ID=<?=$row['id']?>/>
       <!--  
        <input name="button3" type="submit"  class="button_green" id="button3" value="退款" onClick="{if(confirm('您确定要退款吗?')){this.document.selform.submit();return true;}return false;}" ID=<?=$row['id']?>/>
       -->
        <?php }?>
        </td>
        </form> 
      </tr>
      <?php
			}
		}
	  ?>
    </table>
    <table width="100%" border="0" class="ziti">
    <!--  
          <td align="left"><input name="button" type="submit" class="btn1" id="button" value="发货" onClick="{if(confirm('您确定要发货吗?')){this.document.selform.submit();return true;}return false;}">
            <input name="button2" type="submit" class="btn3" id="button2" value="退款" onClick="{if(confirm('您确定要退款吗?')){this.document.selform.submit();return true;}return false;}">
            <input name="button4" style="display:none;" type="submit" class="btn3" id="button4" value="删除" onClick="{if(confirm('您确定要删除订单吗?')){this.document.selform.submit();return true;}return false;}">
            </td>
            -->
          <tr>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table>
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