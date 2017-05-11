<?php
$upload_dir = '../images/gallery/';
$file=basename($_FILES['userfile']['name']);
$uploadfile = $upload_dir . $file;
$message='';
$max_size=2000000;
$type=$_FILES['userfile']['type'];
        
if (!isset($_FILES['userfile'])){
    $message.='Not file!';
}elseif (!is_uploaded_file($_FILES['userfile']['tmp_name'])) {
    $message.="File don't upload!";
}elseif ($_FILES['userfile']['size']>$max_size) {
    $message.="The file is too big!";
}elseif (!($type=="image/gif" || $type=="image/png" || $type=="image/jpeg")) {
    $message.="Wrong file type";
}elseif (move_uploaded_file($_FILES['userfile']['tmp_name'], $uploadfile)) {
    $message.='File '.$file.' upload';
}else{
    $message.="File don't upload!";
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
