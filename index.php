<?php

    require_once dirname(__FILE__).'/functions.php';

    if (count($_POST)) {

        printr($_POST);
    }
?>
<!doctype html>
<html lang="ru">
<head>
    <title>Login Page</title>
</head>
<body>
<form style="display: inline-grid;">
    Авторизация <br><br>
    Логин: <input name="login" type="text"><br>
    Пароль: <input name="password" type="password"><br>
    <input type="submit" value="вход">
</form>
</body>
</html>