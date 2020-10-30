<?php
$host = '127.0.0.1'; // адрес сервера 
$database = 'userdata'; // имя базы данных
$user = 'root'; // имя пользователя
$password = 'root'; // пароль
$link = new Mysqli($host, $user, $password, $database) or die("Ошибка " . mysqli_error($link));
define('UPLOAD_MAX_SIZE', 1000000); // 1mb
define('ALLOWED_TYPES', ['image/jpeg', 'image/png', 'image/gif']);
define('UPLOAD_DIR', 'foto');
define('COMMENT_DIR', 'coments');
?>