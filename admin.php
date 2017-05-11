<?php
$photos = array_slice(scandir('../images/gallery/'), 2);
foreach ($photos as $file_name) {
    $output .= '<img height="100px" src="' . '../images/gallery/' . $file_name . '">';
    $output .= '<form action="delete.php"><input type="hidden" name="delete" value="'.$file_name.'">';
    $output .= '<input type="submit" value="Delete"></form>';
}
?>




<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Admin Panel of Bootstrap Gallery</title>
        <link href="../css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <img class="img-responsive logo" src="../img/gnlv6j7z.bmp"/>
                </div>
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <h1 class="namesite">Admin Panel</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <form action="add.php">
                        <button type="submit">Add Image to Gallery</button>
                    </form>
                    
                        <?= $output ?>
                    
                </div>
            </div>

    </body>
</html>
