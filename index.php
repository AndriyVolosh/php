<?php
require_once 'config.php';
$photos=scandir(PHOTOS_DIR);
var_dump($photos);
foreach ($photos as $file_name) {
    if(strpos($file_name,'.')){
	echo 'cat=';
	echo $file_name;
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
	<?php
	
	?>
	</div>
    </body>
</html>

<?php

const ACCEPT_AVATAR_FILE_TYPES=array('image/jpeg',
    'image/png',
    'image/gif',
    );
const ACCEPT_PHOTO_FILE_TYPES=ACCEPT_AVATAR_FILE_TYPES;
const MAX_PHOTO_FILE_SIZE=3*1024*1024;
const AVATARS_DIR='images/avatars/';
const PHOTOS_DIR='images/gallery/';
const UPLOAD_FILE_ERRORS_MESSAGES=array(
    0 => 'There is no error, the file uploaded with success',
    1 => 'The uploaded file exceeds the upload_max_filesize directive in php.ini',
    2 => 'The uploaded file exceeds the MAX_FILE_SIZE directive that was specified in the HTML form',
    3 => 'The uploaded file was only partially uploaded',
    4 => 'No file was uploaded',
    6 => 'Missing a temporary folder',
    7 => 'Failed to write file to disk.',
    8 => 'A PHP extension stopped the file upload.',
);
