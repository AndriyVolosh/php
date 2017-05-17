<?php
if ($_POST) {
    $file = 'files/users.db';
    $user=array();
    $user['login']=$_POST['login'];
    $user['password']=$_POST['password'];
    var_dump($user);
    $string = serialize($user);
    $f = file_put_contents($file, $string, FILE_APPEND);
}
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <form action="#" method="POST">
            <label>Login: 
                <input type="text" name="login" required/>
            </label><br><br>
            <label>Password: 
                <input type="text" name="password" required/>
            </label><br><br>
            <label>Confirm password: 
                <input type="text" name="password" required/>
            </label><br><br>
            <input type="submit" name="reg" value="Зарегистрироваться"/>
        </form>
    </body>
</html>
