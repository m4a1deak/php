﻿<?php
include("admin_check.php");
include_once("../function.php");

session_start();
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<title>订单详细信息</title>
</head>

<?php
$oid=$_GET['oid'];
$page=$_GET['page'];
$orders=que_select_cl('orders2',$oid);
#结算
if ($_POST['button']){
	$uporder['logisticsno']=$_POST['logisticsno'];
	$uporder['logistics']=$_POST['logistics'];
	edit_update_cl('orders2',$uporder,$oid);
	echo "<script language=javascript>alert('物流编号修改成功.');window.location.href='?oid=".$oid."&page=".$page."'</script>";	
}

if ($_POST['goback']){
	echo "<script language=javascript>window.location.href='admin_Orders1.php?page=".$page."'</script>";
}
?>

<body>
 <form name="form" method="post" action="?oid=<?=$oid?>&page=<?=$page?>">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <div id="daochu">
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
        订单金额：<?=$orders['jine']?><br>
        </p></td>
      </tr>
      <tr>
        <td align="center">商品名称</td>
        
        <td align="center">商品价格</td>
        
        <td align="center">购买数量</td>
        <td align="center">总计金额</td>
        <td align="center">经销商</td>
        </tr>
        
      
      
      <tr>
        <td align="center" width="120"><?=$orders['goodname']?></td>
        <!--<td align="center"><?php if ($lx==1){?>首购商品<?php }else{?>重购商品<?php }?></td>-->
        
        <td align="center"><?=$orders['price']?></td>
        
        <td align="center"><?=$orders['num']?></td>
        <td align="center"><?=$orders['jine']?></td>
        <td align="center"><?=$orders['bnickname']?></td>
      </tr>
     
      </div>
        <td colspan="6" align="center"><input name="goback" type="submit" class="btn1" id="goback" value="返回"></td>
      </tr>
   </table>
    </form>
</body>
</html>