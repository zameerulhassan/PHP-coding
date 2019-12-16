<?php // validate2.php
# FILTER- to sanitize, validate 
    #check for posted data for email.
if(filter_has_var(INPUT_POST, 'data')){
    if(filter_input(INPUT_POST, 'data', FILTER_VALIDATE_EMAIL)){
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
Submit<input type="submit" name="" id=""></input>
</form>