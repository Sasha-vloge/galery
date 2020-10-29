
<?php
$login = $_GET['login'];
$dir = "foto";
$files = scandir($dir);
$files = array_filter($files, function ($file) {
    return !in_array($file, ['.', '..', '.gitkeep','desktop.ini']);
});
 foreach ($files as $file): ?>

    <form method="GET" action='delete.php' >
        <input type="hidden" name="file" value="<?php echo $file; ?>">
        <?php
         $filer= $file;
         $filer .='.txt';
         echo "<a href='edit.php?file=$file&filer=$filer&login=$login ' class='close'>коменты</a>"; ?>
        <input type="hidden" name="filer" value="<?php echo $filer; ?>">
        <input type="hidden" name="login" value="<?php echo $login; ?>">
        <button type="submit" class="close" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </form>
        <img src="<?php echo '/' . $dir . '/' . $file ?>" class="img-thumbnail"
             alt="<?php echo $file; ?>">
    </a>

<?php endforeach; ?>