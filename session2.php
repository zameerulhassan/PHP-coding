<!-- session1-4 pages -->
<?php 
session_start();
$yourEmail=$_SESSION['email'];
$yourName=$_SESSION['name'];
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session2</title>
</head>
<body>
<h1>Thanks you Mr. <?php echo $yourName ?> </h1><br />
<h2>Your email is . <?php echo $yourEmail ?> </h1><br />
<a href="session3.php">GO to page3</a>
</body>
</html>