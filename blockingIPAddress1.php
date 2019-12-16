<!-- this is unreliable way to block IP os user -->
<!-- this file uses another file config.inc.php -->
<?php
require 'config.inc.php';
foreach($ip_blocked as $ip){
    //echo $ip."<br>";
    if($ip==$ip_address){
        die('your ip address'.$ip.' is blocked');
    }
};
?>
<h1>Welcome to this page</h1>