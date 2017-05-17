<?php

function getUsers(){
    $file = 'files/users.db';
    return unserialize(file_get_contents($file));
}