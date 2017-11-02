<?php

$action = $_GET["action"];
if ( !isset( $action ) ) $action = "showlist";

switch ( $action ) {

    case "mkDir":           // Создает дирикторию
        create_dir();
        break;
    case "addFile":         // Создает файл
        create_file();
        break;
    case "deleteFile":      // Удаляет файл
        delete_file();
        break;
    case "editFile":        // Редактирует запись
        edit_file();
        break;
    case "updateFile":      // Сохраняет изменения
        update_file();
        break;
    default:
        show_list();

}

function create_file() {

    $fileName = '';
    $createFile = tempnam('/files', $fileName);
    $handle = fopen($createFile, "w");
    fwrite($handle, "записываем во временный файл");
    fclose($handle);

}