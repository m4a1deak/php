<?php
include_once("../function.php");
session_start();
if ($_GET['nid']!=NULL){
	$news=que_select_cl('news',$_GET['nid']);
}
$member=getMemberbyID($_SESSION['ID']);
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
      
<table width="100%" border="0">
  <tr>
    <td valign="top" align="center"><strong><?=$news['newstitle']?></strong><br><hr></td>
  </tr>
  <tr>
    <td valign="top" ><?=$news['newscontent']?><p></p></td>
  </tr>
  <tr>
    <td valign="top" ><hr></td>
  </tr>
  <tr>
    <td align="center" > <input name="" type="button" class="button_blue" value="返  回" onClick="history.back(-1)"></td>
  </tr>
 
</table>
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