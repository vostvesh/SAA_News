<?php
define('SERVER', 'localhost');
define('USER', 'root');
define('PASS', '');
define('DB', 'test');

$gl_title = $_POST['title'];
$gl_file = $_FILES['content']['name'];
$gl_ate = $_POST['date'];

$dir_news = __DIR__ . "/content/";