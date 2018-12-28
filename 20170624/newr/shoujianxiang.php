<?php
include("../member/check.php");
include_once("../function.php");
$information=que_select_cl('information',1);
session_start();

#搜索会员
if ($_POST['Search']){
	$SearchContent=$_POST['SearchContent'];
	$TimeStart=$_POST['TimeStart'];
	$TimeEnd=$_POST['TimeEnd'];
	$SearchType=$_POST['SearchType'];
	if ($TimeStart!=NULL){
		if ($TimeEnd==NULL){
			$TimeEnd=now();	
		}
		$_SESSION['SearchTime']="and fdate>='".$TimeStart."' and fdate<='".$TimeEnd."'";	
	}else{
		$_SESSION['SearchTime']=NULL;		
	}
	if ($SearchContent!=NULL){
		if ($SearchType==1){
			#搜索会员编号
			$_SESSION['Search']="and nickname='".$SearchContent."'";
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

#删除记录
if ($_POST['button4']){
$cheuid_arr = $_POST['UID'];
	foreach ((array)$cheuid_arr as $id)
	{
		$mail['issdelete']=1;
    	edit_update_cl('mail',$mail,$id);
	}
	echo "<script language=javascript>alert('删除完成.');window.location.href='?'</script>";
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
            <h1>收件箱</h1>
          </div>

<div class="datatable-header">
<div class="dataTables_filter  no-append">  
<div class="btn-group">
  <!-- <input type="submit" name="Submit" value="删除邮件" class="btn"> -->
 <input class="btn" type="button" onClick="Apple_url_a1()"  name="Submit" value="写 信">
  <input class="btn" type="button" onClick="Apple_url_a2()" name="Submit" value="收件箱">
  <input class="btn" type="button" onClick="Apple_url_a3()" name="Submit" value="发件箱">

</div>
</div>
</div>      

<div class="table-overflow">    
<form name="form1" method="post" action="?">        
                           <table class="table table-bordered table-striped table-hover" style=" margin-bottom:1px;">       
                          
<thead>
      <tr>
        <th height="4" colspan="6" align="left">
          <select name="SearchType" id="SearchType" style=" width:120px;" >
            <option value="1">发件会员</option>
          </select>
          <input type="text" name="SearchContent" id="SearchContent">
        <input type="submit" name="Search" id="Search" class="btn" value="搜  索" style=" margin-top:-10px;">        <!--<input type="button" name="dayin" id="dayin" class="btn1" value="导出表格" onClick="exportExcel('daochu')">
        搜索时间范围：
          <input type="text" name="TimeStart" id="TimeStart" style="width:100px" onFocus="HS_setDate(this)">
          至
          <input type="text" name="TimeEnd" id="TimeEnd" style="width:100px" onFocus="HS_setDate(this)">
        -->
        </th>
      </tr>
</thead>

      <div id="daochu">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" name="checkbox" value="checkbox" onClick="javascript:SelectAll()"></th>
                                    <th>发件会员</th>
                                    <th>标题</th>
                                    <th>发件时间</th>
									<th>是否阅读</th>
                                    <th>查看内容</th>
                                </tr>
                            </thead>
        <tbody>    
                            
      <?php
	  	$pagesize = 10; //设置每页记录数 
	  	$sql = "SELECT * FROM `mail` WHERE sid=".$_SESSION['ID']." and issdelete=0 ".$_SESSION['Search']." ".$_SESSION['SearchTime']."";
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
      	$sql = "SELECT * FROM `mail` WHERE sid=".$_SESSION['ID']." and issdelete=0 ".$_SESSION['Search']." ".$_SESSION['SearchTime']." order by fdate desc limit ".$start.",".$pagesize;
		if($query = mysql_query($sql)){
		while ($row=mysql_fetch_array($query)){
	  ?>
      <tr>
      	<td height="21" align="center"><input type="checkbox" name="UID[]" id="UID" value="<?=$row['id']?>"></td>
        <td align="center"><?=$row['nickname']?></td>
        <td align="center"><?=$row['title']?></td>
        <td align="center"><?=$row['fdate']?></td>
        <td align="center"><?php if ($row['isread']==0){?><font color="#FF0000">未读</font><?php }elseif($row['isread']==1){?>已读<?php }?></td>
        <td align="center"><input name="" type="button" class="btn" value="查  看" onClick="window.location.href='mailcontent.php?mid=<?=$row['id']?>&hf=1'"></td>
      </tr>
      <?php
			}
		}
	  ?>
     

    

          <tr>
            <td align="left"><input name="button4" type="submit" class="btn" id="button4" value="删除邮件" onClick="{if(confirm('您确定要删除该邮件吗?')){this.document.selform.submit();return true;}return false;}"></td>
            <td align="right" colspan="5"><?php echo fenye($p,$pagesize,$sum,$total,$cx)?></td>
          </tr>

 </div>
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
