<?php
include("../member/check.php");
//include("../member/check2.php");
include_once("../function.php");
$information=que_select_cl('information',1);
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
	$member = getMemberbyID($_SESSION['ID']);
//var_dump($_SESSION['ID']);
$ul = ulevel($member['ulevel']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
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
            <h1>推荐会员管理</h1>
          </div>
          
  <div class="table-overflow">            
<table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">   
<thead>
      <tr>
        <th height="21" align="center">会员编号</th>
        <th  align="center">会员姓名</th>
        <th align="center">会员资格</th>
        <th align="center">推荐人</th>
<!--         <th align="center">接点人</th> -->
        <th align="center">联系电话</th>
        <th align="center">QQ号码</th>
        <th align="center">激活时间</th>
<!--        <th align="center">服务中心</th>-->
       
      </tr>
</thead>
        
<tbody> 
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `member` WHERE reid=".$_SESSION['ID'];
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
      	$sql = "SELECT * FROM `member` WHERE reid=".$_SESSION['ID']." limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
			$ul=ulevel($row['ulevel']);
	  ?>
      <tr>
        <td height="21" align="center"><?=$row['userid']?></td>
        <td align="center"><?=$row['username']?></td>
        <td align="center"><?=$ul['lvname']?></td>
        <td align="center"><?=$row['rname']?></td>
    <!--     <td align="center"><?=$row['fathername']?></td>-->
        <td align="center"><?=$row['usertel']?></td>
        <td align="center"><?=$row['userqq']?></td>
        <td align="center"><?=$row['pdt']?></td>
<!--        <td align="center"><?=$row['bdname']?></td>-->
      </tr>
      <?php
			}
		}
	  ?>
      
      <tr>
        <td height="21" colspan="7" align="right">
        <?php echo fenye($p,$pagesize,$sum,$total,$cx)?>
        </td>
      </tr>
  
  <tbody>  
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
