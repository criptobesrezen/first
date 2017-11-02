
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
        <?php include '../functions/crud.php'; ?>
        <form action="crud.php" method="POST" enctype="multipart/form-data">
            <input type="text" name="newFileName" value="">
            <input type="submit" value="Создать файл">
        </form>
    </div>
</section>



<link rel="stylesheet" href="/style.css">
<link href="/source/css/poiret-one-font.css" rel="stylesheet">
</body>
</html>