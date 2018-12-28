
<?php

include_once("../function.php");
include_once("../bonus.php");
header("Content-Type: text/html;charset=utf-8");
session_start();

if ($_GET['id']!=NULL){
    $goods=que_select_cl('goods',$_GET['id']);
}


?>

<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>

</head>
<body>

<div id="content">
  <div class="container">
    <div class="row">
       
      <div class="span9" >
	  
	  
                    
<div class="table-overflow">    
		<!-- 限制手机左右拉伸宽度 -->
		 <div class="row-fluid" style=" width:848px;">
<table width="100%" border="0" >
<br>
</br>
  <tr>
    <td rowspan="9" align="center" valign="top" style="width:5cm; height:5cm;" >
    <img src="../upload/<?=$goods['goodsimg']?>" style="width:5cm; height:5cm;" align="top"></td>
    <td align="center" valign="top">
      <h3><?=$goods['goodsname']?></h3></td>
    <td colspan="2" align="center" valign="top"><h3>库存：
      <?=$goods['kucun']?></h3></td>
    </tr>
  <tr>
    <td colspan="3" align="center" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3" align="center" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3" align="center" valign="top">单价：
      <?=$goods['price']?>
      <!--购买数量
      <input name="num" type="text" id="num" value="1" size="5" maxlength="5"   onKeyUp="numChange(this);">
      总计金额：
      <label name="zj" id="zj"><?=$goods['price']?>--></label></td>
    </tr>
  <tr>
    <td colspan="3" align="center" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3" align="center" valign="top">&nbsp;</td>
    </tr>
  <tr>
    <td colspan="3" align="center" valign="top"><!--<input name="button" type="submit" class="button_green" id="button" value="加入购物车">-->      <!--<input name="checkout" type="submit" class="button_green" id="checkout" value="去结算">-->      <input name="input" type="button" class="button_blue" value="返  回" onClick="history.back(-1)"></td>
    </tr>
  <tr>
    <td colspan="3" align="center" valign="top">&nbsp;</td>
  </tr>
  <tr>
    <td colspan="2" align="center" valign="top">&nbsp;</td>
    <td align="center" valign="top">&nbsp;</td>
  </tr>
  
  <tr >
    <td colspan="4" valign="top" ><h3>产品介绍</h3><?=$goods['goodscontent']?></td>
  </tr>
  <tr>
    <td colspan="4" valign="top" ></td>
  </tr>
  <tr>
    <td colspan="4" align="center" >&nbsp;</td>
  </tr>
</table>
</div>
</div>
      <!-- /span9 -->
    </div>
    <!-- /row -->
  </div>
  <!-- /container -->
</div>
<!-- /content -->


</body>
</html>