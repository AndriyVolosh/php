<?php
$photos = array_slice(scandir('images/gallery/'), 2);
foreach ($photos as $file_name) {
    $output .= '<img height="100px" src="' . 'images/gallery/' . $file_name . '">';
}
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Gallery</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-4 col-xs-6">
                    <img class="img-responsive logo" src="img/gnlv6j7z.bmp"/>
                </div>
                <div class="col-md-9 col-sm-6 col-xs-6">
                    <h1 class="namesite">Bootstrap Gallery</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?= $output ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 col-sm-6 col-xs-6">
                    <p class="footer"> &copy; 2017 Bootstrap Gallery</p>
                </div>
        </div>
    </body>
</html>
