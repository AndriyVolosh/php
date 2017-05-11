<?php

?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form name="upload" action="upload.php" method="POST" ENCTYPE="multipart/form-data"> 
            Выберите файл для загрузки: 
            <input type="file" name="userfile">
            <input type="submit" name="upload" value="Загрузить"> 
        </form>
    </body>
</html>
