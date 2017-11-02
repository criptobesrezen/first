
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Создание файлов</title>
</head>
<body>
<?php require_once 'menu.php'; ?>
<section class="wrapper">
    <div class="content">
        <h1 class="content__header">Страница создание файлов</h1>
        <?php require_once 'source/functions/crud.php'; ?>
        <form action="crud.php?action=addFile" method="POST" enctype="multipart/form-data">
            <input type="file" name="file"><br />
            <input type="submit" value="Отправить файл">
        </form>
    </div>
</section>



<link rel="stylesheet" href="/style.css">
<link href="/source/css/poiret-one-font.css" rel="stylesheet">
</body>
</html>