<?php

require_once 'classes/config.php';

require_once dirname(__FILE__) . '/vendor/autoload.php';

$login = $_POST['login'] ?? '';
$password = md5($_POST['password'] ?? '');

$error = [];

if ($login != Config::get('login')) {

    $error['login'] = 'Undefined login';

}elseif ($password != Config::get('hash')) {

    $error['password'] = 'Incorrect password';
} else {

    header("Location: /success.php");
    exit();
}
?>
<!doctype html>
<html lang="ru">
<head>
    <title>Login Page</title>
    <style>
        .has-error input {

            border: 1px solid red;
        }

        .has-error label, .error {

            color: red;
        }
    </style>
</head>
<body>
<form style="display: inline-grid;" method="post">
    Авторизация <br><br>
    <div class="<?= isset($error['login']) ? 'has-error':''?>">
        <label for="login">Логин:</label>
        <input name="login" type="text" value="<?= $login ?>" required>
        <?php if (isset($error['login'])): ?>
            <span class="error"><?= $error['login']; ?></span>
        <?php endif ?>
    </div>
    <div class="<?= isset($error['password']) ? 'has-error':''?>">
        <label for="password">Пароль:</label>
        <input name="password" type="password">
        <?php if (isset($error['password'])): ?>
            <span class="error"><?= $error['password']; ?></span>
        <?php endif ?>
    </div>
    <div>
        <input type="submit" value="Войти">
    </div>
</form>
</body>
</html>