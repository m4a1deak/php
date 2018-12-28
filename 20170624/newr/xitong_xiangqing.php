<?php
include_once("../function.php");
session_start();
if ($_GET['nid']!=NULL){
	$news=que_select_cl('news',$_GET['nid']);
}
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
