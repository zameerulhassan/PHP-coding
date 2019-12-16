<?php // validate2.php
# FILTER- to sanitize, validate 
    #check for posted data for email.
if(filter_has_var(INPUT_POST, 'data')){
    $email=$_POST['data'];//putting input in variable $email
    //to sanitize it, to remove illegal characters
    $email=filter_var($email, FILTER_SANITIZE_EMAIL);
    echo $email.'<br />';
    if(filter_var($email, FILTER_VALIDATE_EMAIL)){
        echo "Email is valid";
    }else{
        echo "Email NOT valid";
    }
}
?>
 <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <!--//using superglobal OR we can put validate.php fileitself
 but this will work even if we change the name of php file
 -->
<input type="data" name="data">
<br />
<input type="submit" name="" id="" value="submit"></input>
</form>