<?php
echo move_uploaded_file($_FILES['pic']['tmp_name'],'./'.$_FILES['pic']['name'])?1:0;
/*$name=$_FILES['pic'];
print_r($name);*/
?>
