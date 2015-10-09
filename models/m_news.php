<?php
require_once __DIR__. "/../function/function.php";

//$all_news = [
//    ['title' => 'Новость 1', 'content' => 'Новость дня!!!', 'date' => '22-11-15'],
//    ['title' => 'Новость 2', 'content' => 'Самолет угнали...', 'date' => '23-11-15'],
//    ['title' => 'Новость 3', 'content' => 'Выборы...', 'date' => '24-11-15'],
//];

$sql = "SELECT * FROM news ORDER BY mydate DESC";

$sql = "SELECT * FROM news";
$all_news = GetAllNews($sql);


if($_POST) {
    $sql = "INSERT INTO news(title, path, mydate) VALUES ('$gl_title', '$gl_file', '$gl_ate')";
    CreateNews($sql);
    header('Location: index.php');
    die;
}

