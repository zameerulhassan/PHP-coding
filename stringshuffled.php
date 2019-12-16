<?php
$string='ABCDEFG1234567';
$stringShuffled= str_shuffle($string); //shuffles-changes order of characters of string.
echo $stringShuffled;
echo "<br />";
$RAND=substr($stringShuffled, 0, 6);
echo $RAND;

echo "<br />";
$HALF=substr($stringShuffled, 0, strlen($stringShuffled)/2);
echo $HALF;

echo "<br />";
$s1='glad to read i was not the only one checking at my phone... hahahaha';
$s2='Loving your tutorials man! Youve done such a great job! Impressive!';
similar_text($s1, $s2, $result);
echo $result.'%';

echo "<br />";
printf ("Total similarity is $%.2f",$result);
?>
