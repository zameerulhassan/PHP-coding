<?php
$myScript=$_SERVER['SCRIPT_NAME'];

?>

<form action="<?php echo $myScript;  ?>" method="POST">
<input type="submit" name="submit" value="Submit"> </input>
</form>
<!-- this file in included in 2 pages (anotherpage.php & superGlobalServer.php) --> 