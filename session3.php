<!-- session1-4 pages -->
<?php 
session_start(); //you can switch this on/off
$yourEmail=isset($_SESSION['email']) ? $_SESSION['email'] : 'no email registered';
$yourName=isset($_SESSION['name']) ? $_SESSION['name'] : 'Guest';
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session 3</title>
</head>
<body>
<h1>This is Page 3 </h1><br />
<h2>Hello <?php echo $yourName ?> <br/>
<h2>Your Email is. <?php echo $yourEmail ?>
</h1><br />
<a href="session4.php">GO to page4</a>
</body>
</html>