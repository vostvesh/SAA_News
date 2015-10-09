<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <?php foreach($all_news as $news):?>
        <p>Дата опубликования: <?php echo $news['date'];?></p>
        <h3><?php echo $news['title'];?></h3>
        <p><?php echo $news ['content'];?></p>
    <?php endforeach?>
</body>
</html>