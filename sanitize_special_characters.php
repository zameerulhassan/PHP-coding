<?php // validate2.php
# Validate INTERGER
$var ='<script>alert(1)</script>';
//echo $var; //dangerous

echo filter_var($var, FILTER_SANITIZE_SPECIAL_CHARS);
//this turns scripts or dangerous code into harmless entities.


?>
 <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <!--//using superglobal OR we can put validate.php fileitself
 but this will work even if we change the name of php file
 -->
<input type="data" name="data">
<br />
<input type="submit" name="" id="" value="submit"></input>
</form>