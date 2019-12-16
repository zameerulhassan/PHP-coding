<?php // copyfile2.php
if (!copy('testfile.txt', 'testfile3.txt')) echo "Could not copy file";
else echo "File successfully copied to 'testfile3.txt'";


//another nice function is file_put_contents('filename', "text to add");
//similarly file_get_contents('filename')
?>