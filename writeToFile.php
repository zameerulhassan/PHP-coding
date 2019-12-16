<?php
$handle= fopen('names.txt', 'w'); 
//this will create this file, if it didn't exit

//$handle2= fopen('names2.txt', 'r'); //but this will not create a new file, since it is read access

fwrite($handle, 'Alex'."\n");
fwrite($handle, 'Perci'."\n");
fwrite($handle, 'Randy'."\n");
fclose($handle);
echo "all records are written";
?>
