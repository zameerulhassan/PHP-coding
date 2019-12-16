<?php 
    include_once 'header.php';
?>
<section class="main-container">
    <div class="main-wrapper">
        <h2>Sign Up</h2>
        <form class= "signup-form" action="include/signup.inc.php" method="POST">
            <input type="text" name="first" placeholder="First name">
            <input type="text" name="last" placeholder="Last name">
            <input type="text" name="email" placeholder="E-Mail">
            <input type="text" name="uid" placeholder="User name">
            <input type="password" name="pwd" placeholder="password">
            <button type="submit" name="submit">Sign Up</button>
        </form>
    </div>
</section>
<?php
    include_once 'footer.php';
?>
