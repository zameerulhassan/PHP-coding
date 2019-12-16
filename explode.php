<?php
//explode — Split a string by a string
//Returns an array of strings, each of which is a substring of string formed by splitting it on boundaries formed by the string delimiter.
$handle= fopen('names4.txt', 'r');
//option-1 
//$readin=fread($handle,'1000'); //2nd arguement is no of chars to read
//echo $readin;
echo "<br>";
echo "<br>";
//option 2
// $readin2=fread($handle, filesize('names4.txt'));
// echo $readin2;
echo "<br />";
//option-3
$readin3=fread($handle, filesize('names4.txt'));
//we want to explode (create) based on ','
$nameArray= explode(',', $readin3);
//print_r($nameArray);
foreach($nameArray as $n){
    echo $n."<br>";
}
fclose($handle);
?>
