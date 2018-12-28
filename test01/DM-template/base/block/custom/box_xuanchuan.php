 
<?php 
$bgv = '';
if($bgcolor<>''){
    if(is_int(strpos($bgcolor,'.'))){
    	$backimgv =' url('.UPLOADPATHIMAGE.$bgcolor.') '; 
        $bgv = ' style="background:'.$backimgv.'  center center fixed no-repeat;background-size:cover; "';	
    }
    else {  
       $bgv = ' style="background:'.$bgcolor.'"';
    }
}

 
					 
?>

<div class="box_xunchuan <?php echo $cssname;?>" <?php echo $bgv;?>>

  <h3><?php echo $namefront;?></h3>
  <div class="subtitle"><?php echo $despjj;?></div>

  <?php 
  if($desp<>'') echo '<div class="text">'.$desp.'</div>';

   
  ?>
   <?php 
            if($linktitle<>'') {  
              ?>
              <div class="dmbtn mt10 tc">
                 <a class="more"  <?php echo linktarget($linkurl);?> href="<?php echo $linkurl?>"><?php echo $linktitle;?> > </a>
              </div>              
               <?php 
               }
              ?>

  
</div>