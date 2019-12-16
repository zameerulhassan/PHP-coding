<?php // validate2.php
# Validate INTERGER
$var ='23';
//OR $var=$_POST['data']; but this will not parse string.
if(filter_var($var, FILTER_VALIDATE_INT)){
 echo $var." is a number";
}else{
    echo $var." is NOT a number";
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