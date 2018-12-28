<div id="listnode" class="grid2ceng <?php echo $listcssname;?>">
<ul>
<?php
 $cus_columnsv = ' '.cus_columnsv($cus_columns);
 
         foreach($result as $v){
               
		$strnum = 0;
        $tid = $v['id'];
        $title = $v['title'];
        $pidname = $v['pidname'];$alias_jump = $v['alias_jump'];
        
        $imgv =  get_img_def($v['kvsm']);
       
        $despv =  get_nodedespjj($v['despjj'],$v['desp'],$v['desptext'],$cus_substrnum);       

 
        $alias=alias($pidname,'node');  
         $linkurl = url('node',$alias,$tid,$alias_jump); 
				?>

 
 <li class="gcoverlaykuo <?php echo $cus_columnsv;?>">    
            <div class="text transition5">
               <div class="textinc transition5">
                   
                    <div class="dmbtn mt10 more1 moresm">
                       <a class="more"  <?php echo linktarget($linkurl);?> href="<?php echo $linkurl?>">查看详情 > </a>
                    </div>     
              
              </div>
          </div>
          <div class="img">
              <img src="<?php echo $imgv?>" alt="<?php echo $title?>">                  
                 <h4><?php echo $title?></h4>              
            </div>
</li>


				<?php
            }//end foreach
 
?>
</ul>
</div>
 