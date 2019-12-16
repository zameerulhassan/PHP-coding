<?php // upload.php
$user = 'root';
$pass ='';
$db = 'testDB';

$connect = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
echo "Well done."
?>