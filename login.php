<!DOCTYPE  html>
<html lang="ru">
<head>
    <title>Login page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<header>
    <div class="header-img">
        <img src="images/welcome.svg" alt="site logo"/>
    </div>
</header>
<div id="main-container">
    <h1>Sign in</h1>
    <form method="POST">
        <div class="form-group">
            <span class="label">Логин</span>
            <input class="input-field" type="text" name="login">
        </div>
        <div class="form-group">
            <span class="label">Пароль</span>
            <input class="input-field" name="password" type="password">
        </div>
        <div class="submit-button">
            <button class="button">Войти</button>
        </div>
    </form>
</div>
<footer>
    &copy; Гвоздецкий Вячеслав
</footer>

</body>
</html>