<?php
$array1=array(
    array(
        'Name'=> 'zam',
        'id'=>123,
        'age'=>46),
    array(
        'Name'=> 'Nasri',
        'id'=>456,
        'age'=>5.5),
    array(
        'Name'=> 'Mashlay',
        'id'=>678,
        'age'=>4)
        );

$name=array_column($array1, 'Name');
echo print_r($name);


$array2=array('Zam', 'Nasri', 'Yamaani', 'Mashlay', 'Nuzte','Zam', 'Nasri', 'Yamaani');
echo"<br />";
//counts no of occurnaces in an array.
echo print_r(array_count_values($array2));
echo"<br />";
?>