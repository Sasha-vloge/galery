<html>
 
<head>
  <title></title>
</head>
 
<body>
<form name="form1" action="" enctype="multipart/form-data" method="post">
<input type="file" name="path" title="Выберите файл"/> </br>
</br>
<input type="submit" name="button" /> </br>
 
 
</body>
 
</html>
 
<?php
require 'setings.php';
  $file = UPLOAD_DIR."/".$_FILES['path']['name'];
  
  if (!in_array($_FILES['files']['type'], ALLOWED_TYPES)) {
  if ($_FILES['files']['size'] < UPLOAD_MAX_SIZE) {  
  if(isset($_FILES['path']['name']))
  {
    move_uploaded_file($_FILES['path']['tmp_name'], $file);
    $filer = $_FILES['path']['name'];
    $filer .= '.txt';
    $uploaddir= COMMENT_DIR;
  $f = fopen("$uploaddir/$filer", 'w');
  //header('Refresh: /');
}}}
?>