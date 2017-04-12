<?php
$muls = array(
    m => 1,
    in => 39.3701,
    ft => 3.28084,
    mil => 0.00062137,
);
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Convertor</title>
        <link href="css/style.css" rel="stylesheet" type="text/css"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <?php
        $from_val = $_POST['from_val'];
        $message = $from_val . ' ';
        $from_units = $_POST['from_units'];
        $message .= $from_units . ' = ';
        $to_units = $_POST['to_units'];
        $from_mul = $muls[$from_units];
        $to_mul = $muls[$to_units];
        $to_val = $from_val * $from_mul * $to_mul;
        $message .= $to_val.' '.$to_units;
        echo $message;
        ?>
    </body>
</html>
