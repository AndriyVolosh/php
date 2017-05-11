<?php
$upload_dir = '../images/gallery/';
$file=$_GET['delete'];
$uploadfile = $upload_dir . $file;
if(unlink($uploadfile)){
    $message.='File '.$file.' was delete';
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?= $message ?>
    </body>
</html>
