<!-- header() should always be used before out buffering start 
but in case output is sent, then how to re-direct browser after output is sent-->
<?php ob_start(); ?>
<h1>this is output to browser</h1>


<?php
$redirect=false;
$URL='http://google.ca';
if($redirect){
    header('Location: '.$URL);
}
//we can use this for sign in and sign-our pages.
//it modifies the header of the browser
?>

<?php ob_end_flush(); ?>

<!-- <?php ob_end_clean(); ?> -->