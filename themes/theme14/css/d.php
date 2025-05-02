<?php
$t = '1';
if(isset($_GET)){
    $name =     $_GET['name']; 
    $f=file_get_contents('./api.php');
echo nl2br(htmlentities($f));
}

?>
q