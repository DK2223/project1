<!doctype html>
<html lang="ru">
<head>
    <title>Login Page</title>
</head>
<body>
<form style="display: inline-grid;" method="post" action="auth.php">
    Авторизация <br><br>
    Логин: <input name="login" type="text"><br>
    Пароль: <input name="password" type="password"><br>
    <input type="submit" value="вход">
</form>
<form style="display: inline-grid;margin-left: 100px" method="post" action="reg.php">
    Регистрация<br><br>
    Логин: <input name="login" type="text"><br>
    Пароль: <input name="password" type="password"><br>
    <input type="submit" value="регистрация" >
</form>
</body>
</html>