<?php
include("check.php");
include("check2.php");
include_once("../function.php");

session_start();
	$member=getMemberbyID($_SESSION['ID']);
	$bdName=$member['bdname'];
	$rName=$member['rname'];
	$FatherName=$member['fathername'];
	$TreePlace=$member['treeplace'];
	$UserID=$member['userid'];
	$NickName=$member['nickname'];
	$UserName=$member['username'];
	$UserTel=$member['usertel'];
	$UserAddress=$member['useraddress'];
	$UserQQ=$member['userqq'];
	$BankName=$member['bankname'];
	$BankCard=$member['bankcard'];
	$BankUserName=$member['bankusername'];
	$BankAddress=$member['bankaddress'];
	$zhifubao=$member['zhifubao'];
	$caifutong=$member['caifutong'];
	$rdt=$member['rdt'];
	$pdt=$member['pdt'];
	$uLevel=$member['ulevel'];
	$useremail=$member['useremail'];
	$rus=getMemberbyID($member['reid']);
	$fus=getMemberbyID($member['fatherid']);
	$rusername=$rus['username'];
	$fusername=$fus['username'];
	switch ($TreePlace)
	{
		case 0:
			$quyu="顶层用户";
			break;
		case 1:
			$quyu="A区";
			break;
		case 2:
			$quyu="B区";
			break;
		case 3:
			$quyu="C区";
			break;
		case 4:
			$quyu="D区";
			break;
		case 5:
			$quyu="E区";
			break;
		case 6:
			$quyu="F区";
			break;
		case 7:
			$quyu="G区";
			break;	
	}
	$ul=ulevel($uLevel);
	$jibie=$ul['lvname'];
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
            <h1>个人资料</h1>
          </div>
          
<table  width="100%" height="100%" cellpadding="3" cellspacing="1"  align="center" class="table1" border="0">
	<tr>
    <td colspan="2" align="center">个人资料</td>
    </tr>
	<tr >
	  <td width="50%" align="right">服务中心编号：</td>
	  <td width="50%" align="left"><?=$bdName?></td>
    </tr>
	<tr>
    <td align="right">推荐人编号：</td>
    <td align="left">
      <?=$rName?></td>
  </tr>
  <tr>
    <td align="right">推荐人姓名：</td>
    <td align="left">
      <?=$rusername?></td>
  </tr>
  <tr style="display:none">
    <td align="right">接点人编号：</td>
    <td align="left">
      <?=$FatherName?></td>
  </tr>
  <tr style="display:none">
    <td align="right">接点人姓名：</td>
    <td align="left">
      <?=$fusername?></td>
  </tr>
  <tr style="display:none">
    <td align="right">安置区域：</td>
    <td align="left">
      <?=$quyu?></td>
  </tr>
  <tr>
    <td align="right">会员编号：</td>
    <td align="left">
      <?=$UserID?></td>
  </tr>
  <tr style="display:none">
    <td align="right">会员编号：</td>
    <td align="left"><?=$NickName?></td>
  </tr>
  <tr>
    <td align="right">会员姓名：</td>
    <td align="left"><?=$UserName?></td>
  </tr>
  <tr >
    <td align="right">联系地址：</td>
    <td align="left"><?=$UserAddress?></td>
  </tr>
  <tr >
    <td align="right">联系电话：</td>
    <td align="left"><?=$UserTel?></td>
  </tr>
  <tr style="display:none">
    <td align="right">电子邮箱：</td>
    <td align="left"><?=$useremail?></td>
  </tr>
  
  <tr>
    <td align="right">开户银行：</td>
    <td align="left">
      <?=$BankName?></td>
  </tr>
  <tr>
    <td align="right">开户帐号：</td>
    <td align="left"><?=$BankCard?></td>
  </tr>
  <tr>
    <td align="right">开户姓名：</td>
    <td align="left"><?=$BankUserName?></td>
  </tr>
  <tr>
    <td align="right">开户地址：</td>
    <td align="left"><?=$BankAddress?></td>
  </tr>
  <tr style="display: none">
    <td align="right">支付宝账号：</td>
    <td align="left"><?=$zhifubao?></td>
  </tr>
  <tr style="display: none">
    <td align="right">微信号：</td>
    <td align="left"><?=$caifutong?></td>
  </tr>
  <tr>
    <td align="right">注册时间：</td>
    <td align="left"><?=$rdt?></td>
  </tr>
  <tr>
    <td align="right">激活时间：</td>
    <td align="left"><?=$pdt?></td>
  </tr>
  <tr>
    <td align="right">会员资格：</td>
    <td align="left">
      <?=$jibie?></td>
  </tr>
</table>
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