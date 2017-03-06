<?php
var_dump($_POST);
echo nl2br(var_export($_FILES, true));
$source_path=$_FILES['uploaded_file']['tmp_name'];
$target_dir=__DIR__.'/upload/';
$pathinfo=pathinfo($_FILES['uploaded_file']['name'], PATHINFO_EXTENSION);
if(!in_array($pathinfo, array('jpg','jpeg','png')));
$file_nr=0;
do{
    $file_nr++;
    $target_path=$target_dir.$file_nr.'.jpg';
}
while(file_exists($target_path));
/*$target_path=__DIR__.'/upload/'. $_FILES['uploaded_file']['name'];
$target_path=__DIR__.'/upload/'. 'bali.jpg';*/

move_uploaded_file($source_path,$target_path);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<div class="form">
    <form action="" method="post" enctype="multipart/form-data">
        <input type="text" value="Beagle" name="breed">
        <input type="file" name="uploaded_file">
        <input type="submit" value="Upload file!">
    </form>
</div>
</body>

</html>