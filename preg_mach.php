
<?php
//pattern matching
//function
//preg_match()
//e.g. checking string inside of a string
//returns 0 or 1
//does not tell the position of the string btw
$string ='this is a human';
if(preg_match('/fdfdhuman/', $string)){ 
    echo "word found in the string";
}
else{
    echo "word NOT found in the string";
}

//OR
//if(preg_match('/human/', 'this is a string of human')){
?>