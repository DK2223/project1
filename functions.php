<?php

use Application\Config;

function printr($name, bool $die = false)
{
    echo '<pre>',print_r($name, true),'</pre>';
    if ($die) die();
}

function checkPassword(string  $password): bool
{
    return md5($password) == Config::get('hash');
}