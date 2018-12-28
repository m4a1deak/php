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
	    $sql="select id,nickname,shourulevel from member where shourulevel={$_POST['level']}";
	    $rs=getAll($sql);
	    if(!empty($rs)){
	    	foreach($rs as $v){
	    	    $sql="update member set b5=b5+{$_POST['jine']} where id={$v['id']}";
	    	    mysql_query($sql);
	    	    $b->bonus_laiyuan($v['id'], $v['nickname'], $v['shourulevel'], "-",5, $_POST['jine'], "员工工资");
	    	    
	    	}
	    }
		//$b->b0bonus();
		alert("分红成功","?");
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


<table width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
        <tr>
        <td height="20" colspan="7" align="center">操 作 记 录</td>
      </tr>
      <!-- 
       <tr>
        <td height="20" colspan="7" > <input type="button" name="dayin" id="dayin" class="btn1" value="导出表格" onClick="window.location.href='excel.php?table=action'"></td>
   
      </tr>
       -->
     
      <tr>
     	<td align="center">序号</td>
     	<td align="center">时间</td>
     	<td align="center">类型</td>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
       
        <td align="center">操作</td>
        <td align="center">操作人</td>
       
        <td style="display:none" align="center">审核状态</td>
    </tr>
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `action` a left join member m on m.id=a.uid left join to_admin t on t.id=a.operationid ";
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
      	$sql = "SELECT * FROM `action` a left join member m on m.id=a.uid left join to_admin t on t.id=a.operationid order by time desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
		
	  ?>
      <tr>
        
        <td align="center"><?=$row['id']?></td>
        <td align="center"><?=$row['time']?></td>
        <td align="center"><?=$row['lxx']?></td>
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['jinee']?></td>
        <td align="center"><?=$row['loginname']?></td>
        
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