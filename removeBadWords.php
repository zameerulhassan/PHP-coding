<?php
$string= 'you are very bad and ugly guy';
echo (str_replace('bad', '--', $string))."<br>";
echo (str_replace('ugly', '--', $string))."<br>";

//how to replace alot of words from sting.
//put the new words (to be replaced) into an array

$toBeReplace = array('bad', 'ugly') ;
echo 'using array to <strong> remove </strong> words'.'<br>';
echo str_replace($toBeReplace, '--', $string)."<br>";
//but how to replace with now words.
//create a new array to be replaced with
$toBeReplacedWith = array('good', 'beautiful');
echo 'using array to <strong>replace </strong> words'.'<br>';
echo str_replace($toBeReplace, $toBeReplacedWith, $string)

?>