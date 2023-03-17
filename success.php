<?php

use Application\Session;

require_once dirname(__FILE__) . '/vendor/autoload.php';

$session = new Session();

if (!$session->is_auth) {

    $session->error = 5;//'Вы не авторизованы!';
    header("Location: /index.php");
    exit();
}

echo 'Секретная страница';