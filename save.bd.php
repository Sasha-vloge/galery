<?php
$login = $_GET['login'];
$pass = $_GET['password'];
$repass = $_GET['repassword'];
include('setings.php');
$result = $link->query("SELECT login FROM `registered users` WHERE login = '$login'");
$t = $result->fetch_array();
$loginb = $t['login'];
if ($repass != $pass){
    echo "пороли не совпадают! Нажмите для возврата: ";
    echo '<a href = "register.php">Вернутся</a>';
    return;
}
if ($pass == '' && $login == ''){
    echo "Введите логин или пароль! Нажмите для возврата: ";
    echo '<a href = "register.php">Вернутся</a>';
    return;
}
if($loginb == $login){
    echo 'Логин занят!';
    echo '<a href = "register.php">Вернутся</a>';
    return;
}

else {mysqli_query($link, "INSERT INTO `registered users`(`login`, `pass`) VALUES ('$login','$pass')");
header('Location: /');
}
?>