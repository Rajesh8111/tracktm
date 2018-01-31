<?php

if(isset($_POST['file'])){
$file = $_POST['file'];
rename('../templates/'.$file,'../templates/removed/'.$file);
echo 'true';
}

?>