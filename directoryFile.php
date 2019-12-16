<?php
//https://www.youtube.com/watch?v=XcDODevXROM&list=PL442FA2C127377F07&index=82
$directory = 'files';
if($handle = opendir($directory.'/')){
echo "$directory".'<br>';

while($file = readdir($handle)){
    if($file!='.' && $file != '..'){ // this if simply removes '.' & '..'
        echo '<a href="'.$directory.'/">'.$file .'</a><br>';
    }

}
}
?>