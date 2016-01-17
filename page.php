<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <title>Document</title>
        <link rel="stylesheet" href="/css/style.css">
        <script src="https://code.jquery.com/jquery-1.11.3.min.js" type="text/javascript"></script>
    </head>
    <body>
        <?php
        echo "<a href=index.php>Ссылка на страницу PHP</a><br />";
        echo "Содержимое HTTP_REFERER - ".
        $_SERVER['HTTP_REFERER']
        ?>
        <script src="/js/main.js"  type="text/javascript"></script>
    </body>
</html>