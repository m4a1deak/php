<?php
include("check.php");
include("check2.php");
include_once("../function.php");

session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<script src="../js/calendar.js"></script>
</head>
<body>
<?php include 'navbar.php';?>
<div id="content">
  <div class="container">
    <div class="row">
      <?php include 'leftsider.php';?>
      <div class="span9" >
      
        <div class="page-header">
            <h1>我的订单</h1>
          </div>
		<div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 
		<div class="row-fluid" style=" width:848px;">-->
      <?php
$oid=$_GET['oid'];
$page=$_GET['page'];
$orders=que_select_cl('orders1',$oid);
#结算
if ($_POST['button']){
	$uporder['logisticsno']=$_POST['logisticsno'];
	$uporder['logistics']=$_POST['logistics'];
	edit_update_cl('orders1',$uporder,$oid);
	echo "<script language=javascript>alert('物流编号修改成功.');window.location.href='?oid=".$oid."&page=".$page."'</script>";
}
if ($_POST['goback']){
	echo "<script language=javascript>window.location.href='Orderslist.php?page=".$page."'</script>";
}
$member=getMemberbyID($_SESSION['ID']);

?>
 <form name="form" method="post" action="?oid=<?=$oid?>&page=<?=$page?>">
	
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">   

<thead>
      
      <tr>
        <td height="10" colspan="6" align="center"> 订单详细信息</td>
      </tr>
      <tr>
        <td height="10" colspan="6" align="left"><p>订单编号：<?=$orders['ordersnumber']?>
          <br>
               
          物流公司：
          <input name="logistics" id="logistics" type="text" value="<?=$orders['logistics']?>">
          <br>
          物流编号：
          <input type="text" name="logisticsno" id="logisticsno" value="<?=$orders['logisticsno']?>">
          <input name="button" type="submit" class="btn2" id="button" value="修改">
          <br>
          会员编号：<?=$orders['userid']?><br>
      收件人：<?=$orders['username']?><br>
       
        联系电话：<?=$orders['usertel']?><br>
        联系地址：<?=$orders['useraddress']?><br>
<!--        订单金额：<?=$orders['gwb']?><br>-->
        </p></td>
      </tr>
      <tr>
        <td align="center">商品名称</td>
        <!--<td align="center">商品类型</td>-->
        <td align="center">商品价格</td>
        <td align="center">购买数量</td>
        <td align="center">总计金额</td>
        </tr>
        </thead>
        <tbody> 
      
	   <thead>
        <tr>
        <td align="center" width="120"><?=$orders['goodname']?></td>
        <!--<td align="center"><?php if ($lx==1){?>首购商品<?php }else{?>重购商品<?php }?></td>-->
        
        <td align="center"><?=$orders['price']?></td>
        
        <td align="center"><?=$orders['num']?></td>
        <td align="center"><?=$orders['jine']?></td>
      </tr>
      </thead>
        <tbody> 
     
	  <tr>
        <td colspan="4" align="center"><input name="goback" type="submit" class="button_blue" id="goback" value="返回"></td>
      </tr>
   </table>
    </form>
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