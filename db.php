<?php

define('MYSQL_SERVER', 'localhost');
define('MYSQL_USER', 'root');
define('MYSQL_PASSWORD', 'root');
define('MYSQL_DB', 'blog_db');

function db_connect() {
    $link = mysqli_connect(MYSQL_SERVER, MYSQL_USER, MYSQL_PASSWORD, MYSQL_DB) or die("Error1: " . mysql_error($link));

    if (!mysqli_set_charset($link, 'utf8')) {
        printf("Error2 :" . mysql_error($link));
    }

    return $link;
}

?>