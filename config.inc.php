<!-- this is unreliable way to block IP os user -->
<!-- this file uses another file config.inc.php -->
<?php
$ip_address=$_SERVER['REMOTE_ADDR'];
//echo $ip_address;
$ip_blocked=array('127.0.0.1', '100.100.100.100');


//more better way to check more deeply, if user is using proxy or shared netwrok.
$http_client_ip=isset($_SERVER["HTTP_CLIENT_IP"]); //if this is set, only then it is equel to this variable.
$http_x_forwared_for=isset($_SERVER["HTTP_X_FORWARDED_FOR"]);
$ip_address=$_SERVER['REMOTE_ADDR'];
if(!empty($http_client_ip)){
    $ip_address=$http_client_ip;
}
else if(!empty($http_x_forwared_for)){
    $ip_address=$http_x_forwared_for;
}
else{
    $ip_address=$_SERVER['REMOTE_ADDR'];
}
?>