<?php
if(isset($_POST['submit'])){
    session_start();
    session_unset();
    session_destroy();
    header("Location: ../index.php");
    //OR
    //header("refresh:5; url= ../index.php");
    exit();
}