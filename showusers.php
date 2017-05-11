<?php
include_once 'includes/config.php';
$users = getUsers();
if (!is_array($users)) {
    $users = array();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
	<ul>
	    <?php foreach ($users as $user): ?>
		<li><?= $user ?></li>
	    <?php endforeach; ?>
	</ul>
    </body>
</html>
