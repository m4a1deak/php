<?php
include("check.php");
include("check2.php");
include_once("../function.php");

session_start();
	$us=getMemberbyID($_SESSION['ID']);
	$bdName=$us['bdname'];
	$rName=$us['rname'];
	$FatherName=$us['fathername'];
	$TreePlace=$us['treeplace'];
	$UserID=$us['userid'];
	$NickName=$us['nickname'];
	$UserName=$us['username'];
	$UserTel=$us['usertel'];
	$UserAddress=$us['useraddress'];
	$UserQQ=$us['userqq'];
	$BankName=$us['bankname'];
	$BankCard=$us['bankcard'];
	$BankUserName=$us['bankusername'];
	$BankAddress=$us['bankaddress'];
	$uLevel=$us['ulevel'];
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
	switch ($uLevel)
	{
		case 1:
			$jibie="一星会员";
			break;
		case 2:
			$jibie="二星会员";
			break;
		case 3:
			$jibie="三星会员";
			break;
		case 4:
			$jibie="四星会员";
			break;
		case 5:
			$jibie="五星会员";
			break;
	}	
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>直推会员表</title>
<style type="text/css">
a:link {
	text-decoration: none;
}
a:visited {
	text-decoration: none;
}
a:hover {
	text-decoration: none;
}
a:active {
	text-decoration: none;
}
</style>
</head>
<body>
<table width="100%" height="100%" border="0">
  <tr valign="top">
    <td colspan="3"><table width="49%" cellpadding="3" cellspacing="1" border="0" align="left" class="table1">
      <tr>
        <td height="21" colspan="5" align="center">左区会员</td>
      </tr>
      <tr>
        <td height="21" align="center">会员编号</td>
        <td align="center">会员级别</td>
        <td align="center">推荐人</td>
        <td align="center">接点人</td>
        <td align="center">QQ号码</td>
      </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数
		if (checkFatherMan($_SESSION['ID'],1)){ 
			$lus=getFatherManbyFidAndTreeplace($_SESSION['ID'],1);
	  		$sql = "SELECT * FROM `member` WHERE (ppath like '%,".$lus['id'].",%' or id=".$lus['id'].") and ispay=1";
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
			$start = $pagesize * ($p - 1); //计算起始记录 
			$sql = "SELECT * FROM `member` WHERE (ppath like '%,".$lus['id'].",%' or id=".$lus['id'].") and ispay=1 order by plevel limit ".$start.",".$pagesize;
			if($query = mysql_query($sql)){
			while ($row=mysql_fetch_array($query)){
				$ul=ulevel($row['ulevel']);
	  ?>
      <tr>
        <td height="21" align="center"><?=$row['userid']?></td>
        <td align="center"><?=$ul['lvname']?></td>
        <td align="center"><?=$row['rname']?></td>
        <td align="center"><?=$row['fathername']?></td>
        <td align="center"><?=$row['userqq']?></td>
      </tr>
      <?php
				}
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="5" align="center"><table width="100%" border="0" class="ziti">
          <tr>
            <td height="21" align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
    </table>
      <table width="49%" cellpadding="3" cellspacing="1" border="0" align="right" class="table1">
     <tr>
        <td height="21" colspan="5" align="center">右区会员</td>
        </tr>
      <tr>
        <td height="21" align="center">会员编号</td>
        <td align="center">会员级别</td>
        <td align="center">推荐人</td>
        <td align="center">接点人</td>
        <td align="center">QQ号码</td>
        </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数
		if (checkFatherMan($_SESSION['ID'],2)){ 
			$rus=getFatherManbyFidAndTreeplace($_SESSION['ID'],2);
	  		$sql = "SELECT * FROM `member` WHERE (ppath like '%,".$rus['id'].",%' or id=".$rus['id'].") and ispay=1";
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
			$start = $pagesize * ($p - 1); //计算起始记录 
			$sql = "SELECT * FROM `member` WHERE (ppath like '%,".$rus['id'].",%' or id=".$rus['id'].") and ispay=1 order by plevel limit ".$start.",".$pagesize;
			if($query = mysql_query($sql)){
			while ($row=mysql_fetch_array($query)){
				$ul=ulevel($row['ulevel']);
	  ?>
      <tr>
        <td height="21" align="center"><?=$row['userid']?></td>
        <td align="center"><?=$ul['lvname']?></td>
        <td align="center"><?=$row['rname']?></td>
        <td align="center"><?=$row['fathername']?></td>
        <td align="center"><?=$row['userqq']?></td>
      </tr>
      <?php
				}
			}
		}
	  ?>
      <tr>
      <td height="21" colspan="5" align="center"><table width="100%" border="0" class="ziti">
        <tr>
          <td height="21" align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
        </tr>
      </table></td>
        </tr>
    </table></td>
  </tr>
</table>
    </td>
  </tr>
</table>



</body>
</html>