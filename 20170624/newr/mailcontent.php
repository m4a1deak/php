<?php
include_once("../function.php");
session_start();
if ($_GET['mid']!=NULL){
	$mail=que_select_cl('mail',$_GET['mid']);
	if ($mail['sid']==$_SESSION['ID']){
		if ($mail['isread']==0){
			$mail_update['isread']=1;
			echo edit_update_cl('mail',$mail_update,$mail['id']);	
		}
	}
}
$member = getMemberbyID($_SESSION['ID']);
//var_dump($_SESSION['ID']);
$ul = ulevel($member['ulevel']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<?php include 'header.php';?>
<SCRIPT LANGUAGE=javascript>
<!--
function SelectAll() {
	for (var i=0;i<document.form1.UID.length;i++) {
		var e=document.form1.UID[i];
		e.checked=!e.checked;
	}
}
-->
</script>
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
            <h1>写信</h1>
          </div>

                   <div class="datatable-header">

  <div class="dataTables_filter  no-append">
  
  <div class="btn-group">
  <!-- <input type="submit" name="Submit" value="发送邮件" class="btn"> -->
  <!-- <input class="btn" type="button" onClick='window.open("xiexin.php")'  name="Submit" value="写 信">
  <input class="btn" type="button" onClick='window.open("shoujianxiang.php")'  name="Submit" value="收件箱">
  <input class="btn" type="button" onClick='window.open("fajianxiang.php")' name="Submit" value="发件箱"> -->
  <input class="btn" type="button" onClick="Apple_url_a1()"  name="Submit" value="写 信">
  <input class="btn" type="button" onClick="Apple_url_a2()" name="Submit" value="收件箱">
  <input class="btn" type="button" onClick="Apple_url_a3()" name="Submit" value="发件箱">

</div>



  </div>

                                    
                                    

</div>                  
                           
                        
<div class="widget-content">
								
								
								
								<div class="tabbable">
	
						
						<br>
						
							<div class="tab-content">
								<div class="tab-pane active" id="1">
							

							<table width="100%" border="0">
  <tr>
    <td valign="top" align="left"><span class="ziti">发件编号：
      <?=$mail['nickname']?>
    </span></td>
  </tr>
  <tr>
    <td valign="top" align="left"><span class="ziti">收件时间：
      <?=$mail['fdate']?>
    </span></td>
  </tr>
  <tr>
    <td valign="top" ><span class="ziti">邮件标题：
      <?=$mail['title']?>
    </span></td>
  </tr>
  <tr>
    <td valign="top" ><span class="ziti">邮件内容：
	  <?=$mail['mailcontent']?></span></td>
  </tr>
  <tr>
    <td align="right" class="ziti" ><hr>      <br></td>
  </tr>
  <tr>
    <td align="center">
    <?php if ($_GET['hf']==1){?><input name="" type="button" class="btn" value="回  复" onClick="window.location.href='mailadd.php?nickname=<?=$mail['nickname']?>'">&nbsp;&nbsp;<?php }?><input name="" type="button" class="btn" value="返  回" onClick="history.back(-1)">
    <br/>
    </td>
  </tr>
</table>
								</div>
								
								
								
							</div>
						  
						  
						</div>
								
								
								

                        
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
