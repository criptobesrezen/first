
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Загрузка файлов</title>
</head>
<body>
<?php require_once 'menu.php'; ?>

<section class="wrapper">
    <div class="content">
        <h1 class="content__header">Добро пожаловать на мой сайт</h1>
        <form action="/source/functions/upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="file"><br />
            <input type="submit" value="Отправить файл">
        </form>
    </div>
</section>



<link rel="stylesheet" href="/style.css">
<link href="/source/css/poiret-one-font.css" rel="stylesheet">
</body>
</html>