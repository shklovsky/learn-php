<?php
require_once 'db.php';
require_once 'models/articles.php';

$link = db_connect();

$articles = articles_all($link);
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
            <div id="navbar" class="navbar-collapse collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="/admin/index.php">Админ панель</a></li>
                </ul>
            </div>
        </div>

        <div class="articles container">
            <h1 class="articles-head">Мой первый блог</h1>
            <?php include 'views/articles.php'; ?>
        </div>
        
        <footer>
            <div class="footer-inner">
                <p>Мой первый блог<br>
                    Copyright &COPY; 2015
                </p>
            </div>
        </footer>
        <script>
        </script>
        <script src="assets/js/main.js"  type="text/javascript"></script>
    </body>
</html>