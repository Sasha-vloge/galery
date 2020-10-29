<?php
$file = $_GET['file'];
$filer = $_GET['filer'];
$login = $_GET['login'];
echo "<p><a href='index.php?login=$login'>Назад</a></p><span aria-hidden='true'>&times;</span>";
?>

<img src="<?php echo '/'.'foto/' . $file ?>" class="img-thumbnail"
             alt="<?php echo $file; ?>">
    </a>
<span aria-hidden="true">&times;</span>
<h2>Добавить комент:</h2>
<form action=''>
<input type="hidden" name="login" value="<?php echo $login; ?>">
<input type="hidden" name="file" value="<?php echo $file; ?>">
<input type="hidden" name="filer" value="<?php echo $filer; ?>">
<input type="text" name="text" >
<button type="submit" >
            <span aria-hidden="true">&times;</span>
        </button>
        <span aria-hidden="true">&times;</span>
</form>
<?php
$text = $_GET['text'];
$f = fopen("coments/$filer", 'a+');
if($text != ''){
    fwrite($f, "$login: $text\r\n" . PHP_EOL);
}
echo "<h3>Коменты:</h3>";
$message = file_get_contents("coments/$filer");
echo nl2br($message);

?>