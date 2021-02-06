<?php
session_start();
$exit = $_GET['exit'];
$login = $_GET['login'];
$auth = $_GET['auth'];
if($auth == true ){ 
$_SESSION['auth'] = true;
$_SESSION['login'] = $login;
}
if ($_GET['exit'] == 1) {
    session_destroy();

    header('location: / ');
    return;
}
if (!empty($_SESSION['auth']) && $exit != 1 ) {
    echo("<h1>Добро пожаловать, $login!</h1>");
    echo '<a href = "?exit=1">exit</a>';
    echo '<h2>Ваша галерея:</h2>';
    echo '<a href= "upload.php">Добавить фото</a>';
    include('galery.php');
    return;
}
else {
    echo('<form action ="login.php" method="get"><p>Ваш логин: <input type="text" name="login" /></p><p>Ваш пароль: <input type="text" name="password" /></p><p><input type="submit" /></p><a href ="register.php">Регистрация</a</form> ');
    return;
}
?>