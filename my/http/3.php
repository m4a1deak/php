<?php
echo move_uploaded_file($_FILES['pic']['tmp_name'],'./'.$_FILES['pic']['name'])?1:0;

?>
