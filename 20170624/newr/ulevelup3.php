<?php
include("check.php");
include("check2.php");
include_once("../function.php");
include_once("../class/bonus_class.php");
include_once("../class/member_class.php");
header("Content-Type: text/html;charset=utf-8");
session_start();

$sql="SELECT * FROM member where id=".$_SESSION['ID']."";
$us = getOne($sql);

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
<script language="javascript">
<!--
function checknickname(lx)
{
	var iframe = document.getElementById("iframe");
	var user =  document.getElementById("nickname");
	iframe.src= "checknickname.php?lx="+lx+"&nickname="+user.value;
}
-->
</script>
<iframe name="iframe" id="iframe" width="0" height="0" src="about:blank" style="display:none"></iframe>
<form name="form1" method="post" action="?" onSubmit="return CheckForm();">
<table  width="100%" cellpadding="3" cellspacing="1" border="0" align="center" class="table1">
 
 <tr>
  <td width="20%" height="22"align="right">推荐人数:</td>
  <td width="20%" align="left"><?=$us['recount']?></td>
  <td width="20%" height="22"align="right">推荐业绩:</td>
  <td width="20%" align="left"><?=$us['reyeji']?></td>
  </tr>
  <tr>
  <td width="20%" height="22"align="right">左区业绩:</td>
  <td width="20%" align="left"><?=$us['area4']?></td>
  <td width="20%" height="22"align="right">右区业绩:</td>
  <td width="20%" align="left"><?=$us['area5']?></td>
  </tr>

  
</table>

</form>
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