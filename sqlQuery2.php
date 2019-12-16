<?php // sqlQuery2.php

$user = 'root';
$pass ='';
$db = 'testDB';
$connect = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
echo "Coonection to Database is Made.";
echo "<br />";


$query = "SELECT * FROM users";
$result = mysqli_query($connect,$query);
if ($result=mysqli_query($connect,$query))
{
    while ($row=mysqli_fetch_row($result))
    {
        echo "<pre>";
    printf ("First Name: %10s\t Last Name: %10s\t User ID: %10s\t Email: %28s\t Tell No.%12s\n",
    $row[0],$row[1],$row[2],$row[3],$row[4]);
    echo "<br />";
    echo "</pre>";
    }
    mysqli_free_result($result);
}
mysqli_close($connect);


?>