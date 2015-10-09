<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php foreach($all_news as $news):?>
        <h3><?php echo $news['title'];?></h3>
        <p><?php echo $content = iconv("windows-1251", "UTF-8", (file_get_contents($dir_news . $news['path'])));?></p>
        <p><?php echo 'Дата: ' . $news['mydate'];?></p>
        <a href="/SAA_News/views/single.php?title=<?php echo $news['title']?>
                            &content=<?php echo $content;?>
                            &date=<?php echo $news['mydate']?>">Читать полностью</a>
        <hr>
    <?php endforeach?>
    <a href="/SAA_News/views/add.php">Добавить новость</a>
</body>
</html>