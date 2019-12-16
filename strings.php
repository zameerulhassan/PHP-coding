<?php // strings.php
#String functions.
$var = "Ulloo_Ka_Pathaa";
echo substr($var, 2); //starts @ index 2
echo "<br  />";
echo substr($var, 5, 4); //starts @ index 5 total 4
echo "<br  />";
echo substr($var, -3); //starts @ index 5
echo "<br  />";
##strpo and strrpos postion
$var2 = strpos("Hello World", "o");
echo $var2;

echo "<br  />";
$var3 = strrpos("Hello World", "o");
echo $var3;

echo "<br  />";
$var4= "I am the only one               you seen today!";
var_dump($var4); //var_dum function gives us information about string.
echo "<br  />";
$trimmed = trim("I am the only one               you seen today!");
echo "<br  />";
var_dump($trimmed);
echo "<br  />";
$var5 = array('zam', 33, '33', null, 'null', '','0', 45.5, '45.5');
foreach($var5 as $x){
    if(is_string($x))
        echo "($x) is a string <br />"; 
}
echo "<br  />";
#gzcompress & gzuncompress
$string1 = "In substr('Hello',1,3), the second number is actually the number of characters to extract, not the position of the end of the substring.  So substr('computer',3,3) will return 'put'.";
$compressed=gzcompress($string1);
echo $compressed;
echo "<br  />";
$uncompressed = gzuncompress($compressed);
echo $uncompressed;


?>