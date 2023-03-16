<?php

require_once ('vendor/autoload.php');
$user = $_POST['user'];
$password = $_POST['password'];

$UserKey = array_search($user,$UsersArray);
$PasswordKey = array_search($password,$PasswordKey);


function printr($name, bool $die = false) {

    echo '<pre>',print_r($name, true),'</pre>';
    if ($die) die();
}