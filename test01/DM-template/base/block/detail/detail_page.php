<?php
if(!defined('IN_DEMOSOSO')) {
	exit('this is wrong page,please back to homepage');
}

 
?>
<div class="content_desp">
<?php
  editlinkgoadm($row_page['id'],'catepidname','page'); 
 
//download
if($downloadurl<>'') detail_downloadurl($downloadurl);

 

dmblockid($despv);

?>
</div> 