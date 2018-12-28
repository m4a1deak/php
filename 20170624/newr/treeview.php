
<?php

include_once("../function.php");
include_once("../class/system_class.php");

if ($_SESSION['to_admin']){
	include("check.php");
	include("check2.php");	
}

$_system=new system_class();
if ($_system->system_tjt()!=1){
	echo "<script language=javascript>alert('您没有查看推荐结构的权限.');window.location.href='member.php'</script>";	
}
session_start();
?>
<?php

if($_POST['submit']){
	$_nickname=$_POST['nickname'];
	if ($_nickname==""){ $_nickname=$_SESSION['nickname']; }
	if(checkisrepath($_SESSION['ID'],$_nickname)){
		$member=getMemberbyNickName($_nickname);
	}else{
		echo "<script language=javascript>alert('您的团队中不存在该成员.');window.location.href='?'</script>";	
	}
}else{
	if ($_GET['ID'] != ""){
		$member=getMemberbyID($_GET['ID']);	
	}else{
		$member=getMemberbyID($_SESSION['ID']);		
	}
}
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
            <h1>推荐关系图</h1>
          </div>
<title>推荐关系图</title>


<link rel="stylesheet" href="treeview/jquery.treeview.css" />
<link rel="stylesheet" href="treeview/red-treeview.css" />
<link rel="stylesheet" href="treeview/screen.css" />
<link rel="stylesheet" type="text/css" href="css/button.css" />

<script src="treeview/lib/jquery.js" type="text/javascript"></script>
<!--<script src="treeview/lib/jquery.cookie.js" type="text/javascript"></script>-->
<script src="treeview/jquery.treeview.js" type="text/javascript"></script>

<script type="text/javascript">
		$(function() {
			$("#tree").treeview({
				collapsed: true,
				animated: "medium",
				control:"#sidetreecontrol",
				persist: "location"
			});
		})
		
	</script>


</head>


<body>
<div id="main" style="height:800px;">
<div id="sidetree">
<form id="form1" method="post" action="?">
<div class="treeheader">查询会员：
  <input name="nickname" id="nickname" type="text" />
  <input name="submit" type="submit" class="button_blue" id="submit" value="查  询" />
</div>
</form>
<div id="sidetreecontrol"><a href="?#"><br />
  全部关闭</a> | <a href="?#">全部展开</a><br />
  <br />
</div>
<ul id="tree">
	<li><strong><?=$member['nickname']?></strong>
		
    	<?php
			echo tree($member['id'],$member['id']);
		?>
	</li>
</ul>
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
