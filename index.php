<?php
require_once 'config.php';
$photos = scandir('images/gallery/');
//var_dump($photos);
foreach ($photos as $file_name) {
    if (strpos($file_name, '.') != 0) {
        $output .= '<img src="' . PHOTOS_DIR . $file_name . '">';
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <div>
            <?= $output?>
        </div>
    </body>
</html>

<?php

const ACCEPT_PHOTO_FILE_TYPES=ACCEPT_AVATAR_FILE_TYPES;
const AVATARS_DIR='images/avatars/';
const PHOTOS_DIR='images/gallery/';

