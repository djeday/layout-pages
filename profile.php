<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Profile page</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style-profile.css">
</head>
<body>
<?php

include('template/components/header.php');
include('template/components/nav.php');
?>
<main>
    <h1>Профиль пользователя</h1>
    <section>
        <p class="section-title">Основная информация</p>
        <div class="profile-group">
            <div class="profile-item-name">Имя</div>
            <div class="profile-item-value">Вячеслав</div>
        </div>
        <div class="profile-group">
            <div class="profile-item-name">Аватар</div>
            <div class="profile-item-value"><img src="images/guest.png" width="32" height="32" alt="avatar"></div>
        </div>
        <div class="profile-group">
            <div class="profile-item-name">Дата рождения</div>
            <div class="profile-item-value">28.06.1994</div>
        </div>
        <div class="profile-group">
            <div class="profile-item-name">Город</div>
            <div class="profile-item-value">Харьков</div>
        </div>
    </section>
    <section>
        <p class="section-title">Контактная информация</p>
        <div class="profile-group">
            <div class="profile-item-name">Адрес электронной почты</div>
            <div class="profile-item-value">gvozdetskyidev@gmail.com</div>
        </div>
        <div class="profile-group">
            <div class="profile-item-name">Телефон</div>
            <div class="profile-item-value">Не заполнено</div>
        </div>
    </section>
</main>
<?php include('template/components/footer.php');?>
</body>
</html>