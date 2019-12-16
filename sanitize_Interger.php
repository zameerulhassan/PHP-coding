<?php // validate2.php
# Validate INTERGER
$var ='23sdsd5454';
var_dump(filter_var($var, FILTER_SANITIZE_NUMBER_INT));


?>
 <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <!--//using superglobal OR we can put validate.php fileitself
 but this will work even if we change the name of php file
 -->
<input type="data" name="data">
<br />
<input type="submit" name="" id="" value="submit"></input>
</form>