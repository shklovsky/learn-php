<?php

function articles_all($link) {
    $query = "SELECT * FROM articles ORDER BY id DESC"; // Выбрать все колоки из таблицы articles, отсортировать по колонке id в убывающем порядке
    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }

    //Извлечение из БД
    $n = mysqli_num_rows($result); // Кол-во строк которое вернула база
    //$articles[] = array();

    for ($i = 0; $i < $n; $i++) {
        $row = mysqli_fetch_assoc($result);
        $articles[] = $row;
    }
    return $articles;
}

function articles_get($link, $id_article) {
    $query = sprintf("SELECT * FROM articles WHERE id=%d", (int)$id_article); // Ищем в базе статью с определенным айдишником
    $result = mysqli_query($link, $query);

    if (!$result) {
        die(mysqli_error($link));
    }
    
    $article = mysqli_fetch_assoc($result); // Кол-во строк которое вернула база
    //$articles[] = array();

    return $article;
}

function articles_new($title, $date, $content) {
    $query = sprintf("INSERT INTO articles title, date, content VALUES" . "('$title, $date, $content')"); 

    
}

function articles_edit($id, $title, $date, $content) {
    
}

function articles_delete($id) {
    
}

?>