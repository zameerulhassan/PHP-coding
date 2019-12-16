<?php
$array1=array('Zam', 'Nasri', 'Yamaani', 'Mashlay', 'Nuzte');
$array2=array(46, 5.5, 5.5, 4, 40);

echo print_r($array1);
echo "<br />";
echo print_r($array2);
echo "<br />";
//combine array 2nd array is values, 1st array is keys.
$array3=array_combine($array1, $array2);
echo print_r($array3);
echo "<br />";
//changing to upper case.
echo print_r(array_change_key_case($array3, CASE_UPPER));
echo "<br />";
//split into chunks.
echo print_r(array_chunk($array2,1));
echo "<br />";

?>