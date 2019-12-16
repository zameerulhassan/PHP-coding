<?php // upload.php
echo<<<_END
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='upload333.php' enctype='multipart/form-data'>
Select File JPG, GIF, PNG or TIF File:
<input type='file' name='filename' size='10' />
<input type='submit' value='Upload' />
</form>
_END;
if ($_FILES){
    $name = $_FILES['filename']['name'];
    $finfo2 = new finfo();
    $mime = $finfo2->file($_FILES['filename']['name'], FILEINFO_MIME_TYPE);
    echo $mime."<br>";
    echo $name."<br>";
    print_r($_FILES);

    //temp files:  [tmp_name] => C:\xampp\tmp\phpF988.tmp
}

echo "</body></html>";

?>