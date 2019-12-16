<?php
$string='lala ke haal ay ? .';
$words=str_word_count($string, 0); //return t/f
$words1=str_word_count($string, 1); //returns array with index
$words2=str_word_count($string,2); //returns words with starting position
$words3=str_word_count($string,2,'.?'); //to include special character for counting as well
print $words;
echo"<br />";

print_r($words1);
echo"<br />";
 
print_r($words2);
echo"<br />";
 
print_r($words3);
?>