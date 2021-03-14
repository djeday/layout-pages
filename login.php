<!DOCTYPE  html>
<html lang="ru">
<head>
    <title>Login page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<?php include_once('template/components/header.php');?>
<?php include_once('template/components/nav.php');?>
<div id="main-container">
    <h1>Sign in</h1>
    <form method="POST">
        <div class="form-group">
            <span class="label login-label">Логин</span>
            <input class="input-field" type="text" name="login">
        </div>
        <div class="form-group">
            <span class="label login-label">Пароль</span>
            <input class="input-field" name="password" type="password">
        </div>
        <div class="submit-button">
            <button class="button">Войти</button>
        </div>
    </form>
</div>
<?php include_once('template/components/footer.php');?>
</body>
</html>