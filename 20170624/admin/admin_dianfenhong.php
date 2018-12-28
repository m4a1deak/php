<?php
include("admin_check.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/member_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();
//$us=GetMemberbyID($_SESSION['ID']);
if ($_POST['submit']){
	$level=(int)$_POST['level'];
	if(is_numeric($_POST['jine'])){
	    $b=new bonus_class();
	    $sql="select id,nickname,bdlevel from member where bdlevel={$_POST['level']} and isbd=3";
	    $rs=getAll($sql);
	    if(!empty($rs)){
	    	foreach($rs as $v){
	    	    $sql="update member set b9=b9+{$_POST['jine']} where id={$v['id']}";
	    	    mysql_query($sql);
	    	    $b->bonus_laiyuan($v['id'], $v['nickname'], $v['bdlevel'], "-",9, $_POST['jine'], "店铺分红");
	    	    
	    	}
	    }
	    
		//$b->b0bonus();
		//alert("分红成功","?");
	}else{
		alert("请输入正确的数值","?");
	}
}
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="css/style.css" />
<title>员工工资</title>
<script language="javascript">
<!--
function checknickname(lx)
{
	var iframe = document.getElementById("iframe");
	var user =  document.getElementById("nickname");
	iframe.src= "../member/checknickname.php?lx="+lx+"&nickname="+user.value;
}



-->
</script>
</head>
<body>
<iframe name="iframe" id="iframe" width="0" height="0" src="about:blank" style="display:none"></iframe>

<form name="form1" method="post" action="?" onSubmit="return CheckForm();">

<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">

  <tr >
  <td align="right" width="45%">人数:</td>
  <td>
  县区店：<?php $num=num("select id from member where bdlevel=1 and isbd=3");echo $num>0?$num:0;?>
  &nbsp;市级店：<?php $num=num("select id from member where bdlevel=2 and isbd=3");echo $num>0?$num:0;?>
 </td>
  </tr>
  <tr >
  <td align="right" >分红级别:</td>
  <td>
  <select name="level">
  		<option value="1">县区店</option>
  		<option value="2">市级店</option>
  		
  </select>
  </td>
  </tr>
  
  <tr>
  	<td align="right">分红金额：</td>
  	<td>
  		<input name="jine" id="nickname" type="text">
  	</td>
  </tr>
</table>

<table align="center" class="ziti">
        <tr>
          <td><input name="submit" id="submit" type="submit" class="button_green" value="分 红" onClick="javascript:return confirm('您确认要分红吗？');"></td>
        </tr>
      </table>
<br>
<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
        <td height="20" colspan="6" align="center"> 分 红 记 录</td>
      </tr>
      <tr>
     	
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">级别</td>
        
        <td align="center">分红金额</td>
        <td align="center">分红时间</td>
       
        <td style="display:none" align="center">审核状态</td>
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` m left join bonuslaiyuan b on m.id=b.uid where lx=9";
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
      	$sql = "SELECT * FROM `member`m left join bonuslaiyuan b on m.id=b.uid where lx=9 order by bdate desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
		
	  ?>
      <tr>
        
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?
        switch($row['yid']){
        	case 1:echo "县级店";break;
        	case 2:echo "市级店";break;
        	default:echo "未知";
        }
        ?></td>
        <td align="center"><?=$row['jine']?></td>
        <td align="center"><?=$row['bdate']?></td>
        
        <td style="display:none"  align="center"><?php if ($row['issh']==1){?>通过审核<?php }else{?> <font color="#FF0000">未审核</font><?php }?></td>
      </tr>
      <?php
			}
		}
	  ?>
  </table>
  <table width="100%" border="0" class="ziti">
          <tr>
            <td align="left">&nbsp;</td>
            <td align="right"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>
        </table>
</form>
<iframe id='iframe' src="" style="display:none;"></iframe>
</body>
</html>