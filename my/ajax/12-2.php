<?php
/*print_r($_FILES);
print_r($_POST);*/
echo move_uploaded_file($_FILES['pic']['tmp_name'],'./'.$_FILES['pic']['name']) ? 'ok' : 'fail';

?>
