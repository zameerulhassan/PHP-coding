<!-- session 1-4 pages -->
<?php 
session_start(); //you can switch this on/off
//unset($_SESSION['name']);
//OR
$_SESSION['name'] = 'zameerulhassan';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session 3</title>
</head>
<body>
<h1>This is Page 4 </h1><br />
<h2>Hello <?php echo $_SESSION['name'] ?> <br/>
<h2>Your Email is. <?php echo $_SESSION['email'] ?>
</h1><br />
</body>
</html>