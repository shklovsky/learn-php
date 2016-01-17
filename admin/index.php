<?php
require_once '../db.php';
require_once '../models/articles.php';

$link = db_connect();

if (isset($_GET['action'])) {
    $action = $_GET['action'];
} else {
    $action = "";
}

$articles = articles_all($link);
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Админ панель</title>
        <link rel="stylesheet" href="assets/css/style.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php include 'widgets/nav.php'; ?>
        <div class="articles container">
            <h1 class="articles-head">Контент админки</h1>
            <?php if ($action == "add") { ?>
                <?php include '../views/article_admin.php'; ?>
            <?php } else { ?>
                <?php include '../views/articles_admin.php'; ?>
            <?php } ?>
        </div>
        <footer>
            <div class="footer-inner">
                <p>Мой первый блог<br>
                    Copyright &COPY; 2015
                </p>
            </div>
        </footer>
    </body>
</html>