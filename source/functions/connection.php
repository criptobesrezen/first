<?php
$connection = @new mysqli('localhost', 'root', 'root', 'first', 3306);
if(mysqli_connect_errno()){
    die(mysqli_connect_error());
}
$connection->query('SET NAMES "UTF-8"');