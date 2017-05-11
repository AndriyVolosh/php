<?php
$users=array(
    array(
	'login'=>'qwe',
	'pass'=>'123',
    ),
    array(
	'login'=>'asd',
	'pass'=>'123',
    ),
    array(
	'login'=>'zxc',
	'pass'=>'123',
    ),
);
$data= serialize($users);
file_put_contents('files/users.db', $data);
