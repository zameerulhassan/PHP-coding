<?php
session_start();
?>
<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title>Log In System</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<!-- user_id	user_first_name	user_last_name	user_email	user_uid 
log_in_bd
-->
<header>
<nav>
<div class="main-wrapper">
    <ul>
        <li><a href="index.php">Home</a></li>
    </ul>
    <div class="nav-login">
        <?php
            if(isset($_SESSION['u_id'])){
                echo '<form action="include/logout.inc.php" method="POST">
                      <button type="submit" name="submit">Logout</button>
            </form>';
            }else{
                echo '<form action="include/login.in.php" method="POST">
                        <input type="text" name="uid" placeholder="Username/e-mail">
                        <input type="text" name="pwd" placeholder="password">
                        <button type="submit" name="submit">Login</button>
                     </form>
                     <a href="signup.php">Sign Up</a>';
            }
        ?>


    </div>
</div>
</nav>
</header>