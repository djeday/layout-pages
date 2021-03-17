<!DOCTYPE html>
<html lang="ru">
<head>
    <title>Posts list</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style-posts.css">
</head>
<body>
<?php

include('resouces/posts.php');
include('template/components/header.php');
include('template/components/nav.php');
?>
<main>
    <h1 class="main-title">Список статей</h1>
    <div class="posts-list">
        <ul>
            <?php foreach ($posts as $post) :?>
                <li>
                    <article>
                        <div class="post-info">
                            <a href="#"><?= $post['user'] ?></a><span class="post-time"><?= $post['date'] ?></span>
                        </div>
                        <h2 class="post-title"><?= $post['title'] ?></h2>
                        <div class="post-image">
                            <img src="<?= $post['image'] ?>" alt="post image">
                        </div>
                        <div class="post-text">
                            <p><?= $post['text'] ?></p>
                        </div>
                    </article>
                </li>
            <?php endforeach;?>
        </ul>
    </div>
</main>
<?php include('template/components/footer.php'); ?>
</body>
</html>