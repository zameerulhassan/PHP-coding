<?php // sqlQuery.php
$user = 'root';
$pass ='';
$db = 'testDB';
$connect = new mysqli('localhost', $user, $pass, $db) or die("Unable to connect");
echo "Coonection to Database is Made.";
echo "<br />";
//defining function 
/**
 * As of PHP 5.5, the MySQL functions are deprecated and are removed in PHP 7. The recommendation is to switch to MySQLi functions
 * , which conveniently offer both a procedural (my preference) and an object-oriented structure. Luckily, it’s a rather easy 
 * transition to MySQLi as functions names and functions are nearly identical (just change mysql_ to mysqli_). 
 * The only exception to this is the mysql_result() function, which has no analog.
 */
function mysqli_result($res,$row=0,$col=0){ 
    $numrows = mysqli_num_rows($res); 
    if ($numrows && $row <= ($numrows-1) && $row >=0){
        mysqli_data_seek($res,$row);
        $resrow = (is_numeric($col)) ? mysqli_fetch_row($res) : mysqli_fetch_assoc($res);
        if (isset($resrow[$col])){
            return $resrow[$col];
        }
    }
    return false;
}

$query = "SELECT * FROM users";
$result = mysqli_query($connect,$query);
if (!$result) die ("Database access failed: ");
$rows = mysqli_num_rows($result);
for ($j = 0 ; $j < $rows ; ++$j)
{
    echo "<br />";
    echo $j;
    echo "<br />";
    echo "*****************************************";
    echo "<br />";
    echo 'User ID: ' . mysqli_result($result, $j, 'id') . '<br />';
    echo 'First Name: ' . mysqli_result($result, $j, 'firstName') . '<br />';
    echo 'Last Name: ' . mysqli_result($result, $j, 'lastName') . '<br />';
    echo 'email: ' . mysqli_result($result, $j, 'email') . '<br />';
    echo 'Tell No: ' . mysqli_result($result, $j, 'tellNo') . '<br />';
    echo "*****************************************";
    //echo "<br />";
}



?>