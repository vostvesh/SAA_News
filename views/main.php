<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php foreach($all_news as $news):?>
        <h3><?php echo $news['title'];?></h3>
        <p><?php echo $news['path'];?></p>
        <p><?php echo 'Дата: ' . $news['date'];?></p>
        <a href="/SAA_News/views/single.php?title=<?php echo $news['title']?>
                            &content=<?php echo $news['path']?>
                            &date=<?php echo $news['date']?>">Читать полностью</a>
        <hr>
    <?php endforeach?>
    <a href="/SAA_News/views/add.php">Добавить новость</a>



    <?php
    $today = date("Y-m-d H:i:s");
    echo $today;
    ?>
</body>
</html>