<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title></title>
</head>
<body>
    <h2>Добавьте новость</h2>
    <form action="/SAA_News/index.php" method="post" enctype="multipart/form-data">
        <input type="text" name="title">
        <br>
        <input type="file" name="content">
        <br>
        <input type="hidden" name="date" value="<?php echo date("Y-m-d H:i:s");?>">
        <input type="submit">
    </form>
</body>
</html>