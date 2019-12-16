<?php // upload.php
echo<<<_END
<html><head><title>PHP Form Upload</title></head><body>
<form method='post' action='upload.php' enctype='multipart/form-data'>
Select File JPG, GIF, PNG or TIF File:
<input type='file' name='filename' size='10' />
<input type='submit' value='Upload' />
</form>
_END;
if ($_FILES)
{
    $name = $_FILES['filename']['name'];
    switch($_FILES['filename']['name'])
    {
        case 'image/jpeg': $ext ='jpg';
        break;
        case 'image/gif': $ext ='gif';
        break;
        case 'image/png': $ext ='png';
        break;
        case 'image/tif': $ext ='tif';
        break;
        default:
    }
    if($ext)
    {
        $n = "emage.$ext";
        move_uploaded_file($_FILES['filename']['tmp_name'], $n);
        echo "Uploaded image '$name' as '$n'<br />";
        echo "<img src='$n' />";
    }
    else
        echo "'$name' is not accepted image file "; 
}
else 
    echo "No image has been uploaded";
echo "</body></html>";
/*
The PHP code to receive the uploaded data is fairly simple, because all uploaded files
are placed into the associative system array $_FILES.
*/
?>