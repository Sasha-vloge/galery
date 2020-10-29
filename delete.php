<?php
$file= $_GET['file'];
$filer= $_GET['filer'];
$login= $_GET['login'];
unlink("foto/$file");
unlink("coments/$filer");
header("Location: index.php?login=$login");
?>