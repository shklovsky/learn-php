<?php
// Подключается на главную страницу и выводит все статьи
?>
<div class="container">
    <?php foreach ($articles as $a) : ?>
        <div class="article">
            <h3 class="article-name"><a href="article.php?id=<?= $a['id'] ?>"><?= $a['title'] ?></a></h3>
            <em class="article-date">Опубликовано: <?= $a['date'] ?></em>
            <p><?= $a['content'] ?></p>
        </div>
    <?php endforeach; ?>
</div>