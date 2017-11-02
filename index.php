<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сайт Носова Р.Л. на PHP</title>
</head>
<body>
<?php require_once '/source/pages/menu.php'; ?>
<section class="wrapper">
    <h1 class="content__header">Добро пожаловать на мой сайт</h1>
    <div class="content">
        <h2>Список файлов:</h2>
        <?php require_once '/source/functions/connection.php';
        $sql = "SELECT * FROM files";
        $result = $connection->query($sql);

        $dir    = '/files';
        $files = scandir('source'.$dir);

        ?>


        <ul class="files-list">
            <?php $i = 1;
            foreach ($files as $file) {
                if (in_array($file, array('.', '..'))) continue;?>
            <li class="files-list__row"><span class="files-list__padding"><? echo $i++ . '.';?></span>
                <a class="files-list-item" href="/source/files/<? echo($file); ?>"><? echo($file); ?></a>
                <input class="files-list__buttons files-list__buttons--blue" type="submit" value="Изменить">
                <input class="files-list__buttons files-list__buttons--red" type="submit" value="Удалить"><br></li><? } ?>
        </ul>
    </div>
</section>



<link rel="stylesheet" href="/style.css">
<link href="/source/css/poiret-one-font.css" rel="stylesheet">
</body>
</html>