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
  $file = "foto/".$_FILES['path']['name'];
  move_uploaded_file($_FILES['path']['tmp_name'], $file);
  if(isset($_FILES['path']['name']))
  {
    $filer = $_FILES['path']['name'];
    $filer .= '.txt';
  $f = fopen("coments/$filer", 'w');
  //header('Refresh: /');
}
 
?>