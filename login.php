<?php
$login = $_GET['login'];
$pass = $_GET['password'];
include('setings.php');
$result = $link->query("SELECT pass,login FROM `registered users` WHERE login = '$login'");
$t = $result->fetch_array();
$passb = $t['pass'];
$loginb = $t['login'];
if($login == '' && $pass == ''){
    $auth = 0;
   header("Location:index.php?auth=$auth",0);
    return;
}
elseif($login == $loginb && $pass == $passb){
    $auth = 1;
   header("Location:index.php?auth=$auth&login=$login",0);
    return;
}
?>