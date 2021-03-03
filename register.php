<!DOCTYPE  html>
<html lang="ru">
<head>
    <title>Register page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style-register.css">
</head>
<body>
<header>
    <div class="header-img">
        <img src="images/logo_welcome.png" alt="site logo"/>
    </div>
</header>
<div id="main-container">
    <h1>Регистрация аккаунта</h1>
    <form method="POST">
        <div class="form-group">
            <span class="label register-label">Логин</span>
            <input class="input-field" type="text" name="login">
        </div>
        <div class="form-group">
            <span class="label register-label">Пароль</span>
            <input class="input-field" name="password" type="password">
        </div>
        <div class="form-group">
            <span class="label register-label">Повторите пароль</span>
            <input class="input-field" name="password" type="password">
        </div>
        <div class="form-group">
            <span class="label register-label">Адрес электронной почты</span>
            <input class="input-field" type="email" name="email">
        </div>
        <div class="form-group">
            <span class="label register-label">Имя</span>
            <input class="input-field" type="text" name="fullname">
        </div>
        <div class="form-group">
            <span class="label register-label">Город</span>
            <input class="input-field" type="text" name="city">
        </div>
        <div class="submit-button">
            <button class="button">Зарегистрироваться</button>
        </div>
    </form>
</div>
<footer>
    &copy; Гвоздецкий Вячеслав
</footer>

</body>
</html>