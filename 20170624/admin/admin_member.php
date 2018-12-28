<?php
include("admin_check.php");
include_once("../function.php");
session_start();
header("Content-Type: text/html;charset=utf-8");
checkqx(1,2);
#搜索会员
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	$TimeStart=$_POST['TimeStart'];
	$TimeEnd=$_POST['TimeEnd'];
	if ($TimeStart!=NULL){
		if ($TimeEnd==NULL){
			$TimeEnd=now();	
		}
		$_SESSION['SearchTime']="and date_format(pdt,'%Y-%m-%d')>=date_format('{$TimeStart}','%Y-%m-%d') and date_format(pdt,'%Y-%m-%d')<=date_format('{$TimeEnd}','%Y-%m-%d')";	
	}else{
		$_SESSION['SearchTime']=NULL;		
	}
	if ($SearchContent!=NULL){
		$SearchType=$_POST['SearchType'];
		if ($SearchType==1){
			#搜索会员编号
			$_SESSION['Search']="and nickname like '%".$SearchContent."%'";
		}elseif($SearchType==2){
			#搜索推荐人
			$_SESSION['Search']="and rname like '%".$SearchContent."%'";
		}elseif($SearchType==3){
			#搜索报单中心
			$_SESSION['Search']="and bdname like ='%".$SearchContent."%'";
		}elseif($SearchType==4){
			#搜索顶层会员
			$_SESSION['Search']="and  username like '%".$SearchContent."%'";
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




?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link href="css/table.css" rel="stylesheet" type="text/css">
<link href="css/style.css" rel="stylesheet" type="text/css">
<script src="../js/calendar.js"></script>

<SCRIPT type="text/javascript">
	function manage(id){
		window.open("../newr/index.php?Manager_ID="+id);
	}
	function chongxiao(a){
		var p=prompt("请输入增减复投币的数额","");
		
	
			if(p!=null && p!=""){
				var c=confirm("你确定要这么做吗？");

				if(c){
					var exg=/^-?\d+(\.\d{0,2})?$/;
					if(exg.test(p)){
						var temp = document.createElement("form");        
						  temp.action ="?id="+a;        
						 temp.method = "post";        
						temp.style.display = "none";        
						        
						 var opt = document.createElement("input");        
						   opt.name = "chongxiao";        
						    opt.value = p;        
						       // alert(opt.name)        
						     temp.appendChild(opt);        
						         
						   document.body.appendChild(temp);        
						   temp.submit();        
						   // return temp;  
					}else{
						alert("请输入正确的数值");
					}
				}
				     
		}
		
	}
</SCRIPT>
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
        <td height="10" colspan="19" align="left">
          <select name="SearchType" id="SearchType">
            <option value="1">会员编号</option>
            <option value="4">会员姓名</option>
            <option value="2">推荐人</option>
            <option value="3">服务中心</option>
            
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="btn1" value="搜索">
        <input type="button" name="dayin" id="dayin" class="btn1" value="导出表格" onClick="window.location.href='excel.php?table=member'"></td>
      </tr>
      <tr>
        <td height="5" colspan="19" align="left">搜索时间范围：
          <input type="text" name="TimeStart" id="TimeStart" style="width:100px" onFocus="HS_setDate(this)">
          至
          <input type="text" name="TimeEnd" id="TimeEnd" style="width:100px" onFocus="HS_setDate(this)"></td>
      </tr>
      <tr>
        <td height="10" colspan="19" align="center">正式会员</td>
      </tr>
      <tr>
      <td align="center">序号</td>
        <td align="center">会员编号</td>
        <td align="center">会员姓名</td>
        <td align="center">投资金额</td>
        <td align="center">会员资格</td>
        <td align="center">推荐人</td>
        <td align="center">接点人</td>
        
        <td align="center">累计奖金</td>
        <td align="center">剩余奖金</td>
       
       
        <td align="center">报单币</td>
        
        <td align="center">复投币</td>
        <td align="center">慈善基金</td>
        <td align="center">联系电话</td>
        

        <td align="center">服务中心</td>
       
        <td align="center">注册时间</td>
        <td align="center">激活时间</td>
        <td align="center">详细信息</td>
    </tr>
      <?php
	  	$pagesize = 20; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` WHERE ispay>0 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
	
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
		$xuhao=($p-1)*$pagesize+1;
      	$sql = "SELECT * FROM `member` WHERE ispay>0 ".$_SESSION['Search']." ".$_SESSION['SearchTime']." ORDER BY id DESC,id asc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$ul=ulevel($row['ulevel']);
		$sql1="select * from member where ppath like '%{$row['ppath']}%'";
		if($query1=mysql_query($sql1)){
		$num=mysql_num_rows($query1);
	}
	  ?>
      <tr>
      <td align="center"><?php echo $xuhao;$xuhao++;?></td>
        <td align="center"><?=$row['userid']?><?php if($row['ispay']==3){?>[回填单]<?php }?><?php if($row['ispay']==2){?>[空单]<?php }?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$row['lsk']?></td>
        <td align="center"><?=$ul['lvname']?></td>
        <td align="center"><?=$row['rname']?></td>
        <td align="center"><?=$row['fathername']?></td>
        <td align="center"><?=$row['maxmey']?></td>
        <td align="center"><?=$row['mey']?></td>
       
        
        <td align="center"><?=$row['zsq']?></td>
         
        <td align="center"><?=$row['cfxf']?></td>
        <td align="center"><?=$row['wlf']?></td>
 	    
        <td align="center"><?=$row['usertel']?></td>
        
        

       	<td  align="center"><?=$row['bdname']?></td>
        
         <td align="center"><?=$row['rdt']?></td>
         <td  align="center"><?=$row['pdt']?></td>
        <td align="center">
       <!--  <input type="button" class="button" value="增减复投币" onclick="chongxiao(<?php echo $row['id'];?>);"/>
         --><input type="button" class="button" id="button" name="button" value="查看" onClick="window.location.href='admin_UpdateProfile.php?ID=<?=$row['id']?>'" /> 
         <input type="button" class="button" id="button" name="button" value="管理" onClick="manage(<?=$row['id']?>)" /></td>
      </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="19" align="right">
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