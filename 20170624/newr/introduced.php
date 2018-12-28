<?php
include("check.php");
include_once("../function.php");
session_start();
$information=que_select_cl('information',1);
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
    <td valign="top" align="center"><strong>公司简介</strong><br><hr></td>
  </tr>
  <tr>
    <td valign="top" ><?=$information['introduced']?><p></p></td>
  </tr>
  <tr>
    <td valign="top" ><hr></td>
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