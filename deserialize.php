<?php

//deserialize
$data=file_get_contents('files/users.db');
$users= unserialize($data);
var_dump($users);