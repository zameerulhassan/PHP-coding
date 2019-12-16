<!-- header() should always be used before out buffering -->
<?php
$redirect=true;
$URL='http://google.ca';
if($redirect){
    header('Location: '.$URL);
}
//we can use this for sign in and sign-our pages.
//it modifies the header of the browser
?>