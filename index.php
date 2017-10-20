<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сайт Носова Р.Л. на PHP</title>
</head>
<body>

<div class="main-nav">
    <section class="wrapper main-nav__container">
        <span><p class="logo">CRiPTo BeSReZeN</p></span>
        <ul class="menu">
            <li><a class="menu__button" href="/">Главная</a></li>
            <li><a class="menu__button" href="/source/files/">Файлы</a></li>
            <li><a class="menu__button" href="/source/pages/create.php">Создание</a></li>
            <li><a class="menu__button" href="/source/pages/delete.php">Удаление</a></li>
            <li><a class="menu__button" href="/source/pages/edit.php">Редактирование</a></li>
        </ul>
    </section>
</div>
<section class="wrapper">
    <h1 class="content__header">Добро пожаловать на мой сайт</h1>
    <div class="content">
        <h2>Список файлов:</h2>
        <?php require_once '/source/functions/connection.php';
        $sql = "SELECT * FROM files";
        $result = $connection->query($sql);

        $dir    = '/files';
        $files1 = scandir('source'.$dir);

        ?>
        <ul class="files-list">
            <?php $i = 1;
            foreach ($files1 as $file) {
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