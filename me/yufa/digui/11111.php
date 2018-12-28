<?php
function a($sum){
    if($sum>1){
        return $sum + a($sum-1);
    }else{
        return 1;
    }

}
echo a(100);

?>
