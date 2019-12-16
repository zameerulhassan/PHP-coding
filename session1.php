<!-- session1-4 pages -->

<?php
if(isset($_POST['submit'])){
    session_start();
    $_SESSION['name'] =htmlentities($_POST['name']);
    $_SESSION['email'] =htmlentities($_POST['email']);
    //echo $_SESSION['name'];
    //to redirect from php to new page. use function Header
    header('Location: session2.php');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Session1</title>
</head>
<body>
    <form method="POST" action= "<?php echo $_SERVER['PHP_SELF']; ?>"> <!--//or action = blank -->
        <h1>This is Page 1</h1>
            <div style=padding:20px;>
                Enter Name:<br />
                    <input style=width:100px; type="text" name="name" placeholder="Enter Name"><br>
                Enter Email:<br />
                    <input style=width:100px; type="text" name="email" placeholder="Enter Email"><br>
                    <input style=width:100px; type="submit" name="submit" value="Submit"><br>
            <div>
    </form> 
</body>
</html>

<?php
?>
