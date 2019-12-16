<?php
$fileName='testfile.txt';
$handle= fopen($fileName, 'r');
$readIn=fread($handle, filesize($fileName));
echo $readIn;
echo"<br>";
?>