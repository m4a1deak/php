<?php
//水仙花
for($g = 0 ;$g <= 9;$g++){
    for($s = 0;$s <=9;$s++){
        for($b =1 ;$b<=9;$b++){
            if($b*100+$s*10+$g == $g*$g*$g+$s*$s*$s+$b*$b*$b){
                echo $b*100+$s*10+$g;
                echo "<br>";
            }
        }
    }
}

?>
