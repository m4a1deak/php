<?php
include("../member/check.php");
include("../member/check2.php");
include_once("../function.php");
$information=que_select_cl('information',1);
header("Content-Type: text/html;charset=utf-8");
session_start();
$us=que_select_cl('member',$_SESSION['ID']);
if ($_POST['submit']){
	if ($sus=getMemberbyNickName($_POST['snickname'])){
		$mail['uid']=$us['id'];
		$mail['nickname']=$us['nickname'];
		$mail['sid']=$sus['id'];
		$mail['snickname']=$sus['nickname'];
		$mail['title']=$_POST['title'];
		$mail['mailcontent']=$_POST['mailcontent'];
		$mail['fdate']=now();
		echo add_insert_cl('mail',$mail);
		echo "<script language=javascript>alert('邮件发送成功.');window.location.href='?'</script>";	
	}else{
			echo "<script language=javascript>alert('该会员不存在,请确认后重新填写');window.location.href='?'</script>";	
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
								<div class="tab-pane active"  >
<form name="form1" method="post" class="form-horizontal" action="?" onSubmit="return CheckForm();">
									<fieldset>
										
										<div class="control-group">											
											<label class="control-label" for="snickname">收信会员：</label>
											<div class="controls">
												<input name="snickname" type="text" id="snickname"  class="input-medium disabled"    value="<?=$_GET['nickname']?>" > <input name="lx" type="radio" id="lx" value="1" checked onClick="lxClick(1)">
      会员
      <input type="radio" name="lx" id="lx" value="2" onClick="lxClick(2)">
      管理员
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="title">信件标题：</label>
											<div class="controls">
												<input type="text"  class="input-large" name="title" type="text" id="title" > <font color="#FF0000">*</font>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										
										<div class="control-group">											
											<label class="control-label" for="mailcontent">内容：</label>
											<div class="controls">
												<textarea  id="mailcontent" name="mailcontent"  rows="5" cols="5"  class="span5"></textarea>
											</div> <!-- /controls -->				
										</div> <!-- /control-group -->
										
										

										
										
											
											<br>
										
											
										<div class="form-actions">
											<input name="submit" id="submit" type="submit" class="btn" value="发  送" onclick="javascript:return confirm('您确认要发送站内信吗？');"> 
										
										</div> <!-- /form-actions -->
									</fieldset>
								</form>
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
