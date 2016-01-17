<?php
//Полная статья
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Мой супер крутой блог</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <div class="container">
            <div class="article">
                <h3 class="article-name"><?= $article['title'] ?></h3>
                <em class="article-date">Опубликовано: <?= $article['date'] ?></em>
                <p><?= $article['content'] ?></p>
            </div>
        </div>
        <footer>
            <div class="footer-inner">
                <p>Мой первый блог<br>
                    Copyright &COPY; 2015
                </p>
            </div>
        </footer>
        <script src="assets/js/main.js"  type="text/javascript"></script>
    </body>
</html>