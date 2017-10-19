<?      require_once '../../source/functions/connection.php';
        $sql = "SELECT * FROM files";
        $result = $connection->query($sql);

//        $add = "INSERT INTO files (file_name) VALUES ('first-file')";

//         echo '<pre>'; print_r($_FILES); exit;

        $file = $_FILES['file'];

        $dir = '../../source/files/';

        if(!file_exists($dir)){
            mkdir($dir, 0777);
        }

        $file_name = $dir.'/'.$file['name'];

        if(move_uploaded_file($file['tmp_name'], $file_name)){
            echo "<p>Файл успешно загружен</p>";
            echo '<p>Путь до файла: '.$file_name.'</p>';
            echo '<p><a href="'.$file_name.'" target="_blank">открыть файл</a></p>';
        }else {
            echo "Возникла ошибка при загрузке файла";
        }