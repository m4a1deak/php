<?php
include("../member/check.php");
include_once("../function.php");

session_start();
$information=que_select_cl('information',1);
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
            <h1>系统公告</h1>
          </div>
          <div class="table-overflow">
          
          <form name="form1" method="post" action="?">
          
                           <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>公告标题</th>
                                    <th>发布日期</th>
                                </tr>
                            </thead>   
                            <tbody>      

      <?php
	  	$pagesize = 15; //设置每页记录数 
	  	$sql = "SELECT * FROM `news` WHERE isedit=1";
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
      	$sql = "SELECT * FROM `news` WHERE isedit=1 order by id desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      	<tr>
        <td width="70%" align="left"><a href="xitong_xiangqing.php?nid=<?=$row['id']?>" style="text-decoration:none"><?=$row['newstitle']?></a></td>
        <td align="center"><?=$row['newstime']?></td>
       </tr>
      <?php
			}
		}
	  ?>
      <tr>
        <td height="21" colspan="2" align="right">
        <?php echo fenye($p,$pagesize,$sum,$total,$cx)?>
        </td>
      </tr>
</tbody>
</table> 
</form>
                        
                        
                        
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
