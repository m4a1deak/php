<?php
include("admin_check.php");
include_once("../function.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(1,2);
#搜索会员
if ($_POST['Search']){
	switch ($_POST['SearchType']){
		case 0:
			$title = "正常排序";
			$_SESSION['Search']='pdt';
			break;
		case 1:
			$title = "积分排序";
			$_SESSION['Search']='zsq';
			break;
		case 2:
			$title = "奖金余额排序";
			$_SESSION['Search']='mey';
			break;
		case 3:
			$title = "奖金累计排序";
			$_SESSION['Search']='maxmey';
			break;
		case 4:
			$title = "推荐人排序";
			$_SESSION['Search']='recount';
			break;
		
		case 5:
			$title = "复投币排序";
			$_SESSION['Search']='cfxf';
			break;
			case 6:
				$title = "创业基金排序";
				$_SESSION['Search']='wlf';
				break;
				case 7:
					$title = "豪车基金排序";
					$_SESSION['Search']='jijin';
					break;
	}
}else{
	if ($_GET['page']==NULL){
		$title = "正常排序";
		$_SESSION['Search']='pdt';
	}
}

?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="../js/calendar.js"></script>
<title>个人资料</title>
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
<form name="form1" method="post" action="?">
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
      <tr>
        <td height="10" colspan="11" align="left">
          <select name="SearchType" id="SearchType">
          	<option value="0">正常排序</option>
            <option value="1">报单币排行</option>
            <option value="5">复投币排行</option>
            <option value="6">慈善基金排行</option>
            <option value="2">奖金余额排行</option>
            <option value="3">奖金累计排行</option>
            
           
            <option value="4">推荐人数排行</option>
           
            
          </select>
        <input type="submit" name="Search" id="Search" class="btn1" value="搜索"></td>
      </tr>
      <tr>
        <td height="10" colspan="10" align="center"><?=$title ?></td>
      </tr>
      <tr>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td style="display: none;" align="center">会员资格</td>
        <td style="display: none;" align="center">推荐人</td>
        <td style="display: none;" align="center">接点人</td>
        <td align="center">累计奖金</td>
        <td align="center">剩余奖金</td>
        <td align="center">报单币</td>
        <td align="center">积分</td>
        
        
        
        <td align="center">推荐人数</td>
        
        <td style="display: none;" align="center">服务中心</td>
        <td style="display: none;" align="center">激活时间</td>
        <td align="center">详细信息</td>
    </tr>
      <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` WHERE ispay>=1 order by ".$_SESSION['Search']." ";
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
      	$sql = "SELECT * FROM `member` WHERE ispay>=1 order by ".$_SESSION['Search']." desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$ul=ulevel($row['ulevel']);
	  ?>
      <tr>
        <td align="center"><?=$row['userid']?><?php if($row['ispay']==2){?>[空单会员]<?php }?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center" style="display: none;"><?=$ul['lvname']?></td>
        <td align="center" style="display: none;"><?=$row['rname']?></td>
        <td align="center" style="display: none;"><?=$row['fathername']?></td>
        <td style="display:none" align="center"><?=$row['usertel']?></td>
        <td style="display:none" align="center"><?=$row['userqq']?></td>
        <td align="center"><?=$row['maxmey']?></td>
        <td align="center"><?=$row['mey']?></td>
        <td align="center"><?=$row['zsq']?></td>
        <td align="center"><?=$row['gwb']?></td>
        <td align="center"><?=$row['recount']?></td>
        <td align="center"style="display:none"><?=$row['bdname']?></td>
        <td align="center"style="display:none"><?=$row['pdt']?></td>
        <td align="center"><input type="button" class="button" id="button" name="button" value="查看" onClick="window.location.href='admin_UpdateProfile.php?ID=<?=$row['id']?>'" /></td>
      </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="10" align="right">
        <table width="100%" border="0">
          <tr>
            <td align="left">&nbsp;</td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table></td>
      </tr>
    </table>
    </form>
</body>
</html>