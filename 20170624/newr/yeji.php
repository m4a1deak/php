<?php
include("check.php");
include("check2.php");
include_once("../function.php");

session_start();
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
<div class="page-header">
            <h1>我的业绩</h1>
          </div>
          
<table width="100%" border="0">

   <tr>
    <td align="center">销售总业绩：</td>
    <td align="left"><font color="#FF0000">
      <?=$us['area1']?>
    </font></td>
   <td align="center">待结算业绩：</td>
    <td align="left"><font color="#FF0000">
      <?=$us['area2']?>
    </font></td>
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