<?php
$title = $_GET['title'];
$content = $_GET['content'];
$date = $_GET['date'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h1><?php echo $title;?></h1>
    <p><?php echo readfile($content);?></p>
    <p><?php echo $date;?></p>
    <a href="/SAA_News/index.php">На главную</a>
</body>
</html>