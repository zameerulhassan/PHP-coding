<?php
//implode — Join array elements with a string
$handle= fopen('names4.txt', 'r');
echo "<br />";
$readin3=fread($handle, filesize('names4.txt'));
$nameArray= explode(',', $readin3);
//$nameArray is an array
//we want to create string from array now.
$string=implode(',',$nameArray);
    echo $string;
fclose($handle);
?>