<?php 
include_once("../function.php");
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
            <h1>审核状况</h1>
          </div>
          
          <div class="table-overflow">
                           <table class="table table-bordered table-striped table-hover">
                            <thead>
                                <tr>
                                    <th>收款人编号</th>
                                    <th>姓名</th>
                                    <th>银行名称</th>
                                    <th>银行帐号</th>
	                                <th>手机号</th>
                                    <th>金额</th>
                                    <th>备注</th>
                                    <th>操作</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td><font color="#FF0000">未审核</font></td>
                                </tr>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td>已审核</td>
                                </tr>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td>已审核</td>
                                </tr>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td>已审核</td>
                                </tr>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td>已审核</td>
                                </tr>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td>已审核</td>
                                </tr>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td>已审核</td>
                                </tr>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td>已审核</td>
                                </tr>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td>已审核</td>
                                </tr>
                                <tr>
                                    <td>6890848</td>
                                    <td>admin</td>
                                    <td>建设</td>
                                    <td></td>
	                                <td>15964596555</td>
                                    <td>70</td>
                                    <td>第1级</td>
                                    <td>已审核</td>
                                </tr>
                            </tbody>
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
