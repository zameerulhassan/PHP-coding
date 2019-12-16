<?php // validate1.php
# FILTER- to sanitize, validate 
    #check for posted data.
if(filter_has_var(INPUT_POST, 'data')){
    echo "Data Found";
}else{
    echo "Data Not Found";
}

?>
 <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <!--//using superglobal OR we can put validate.php fileitself
 but this will work even if we change the name of php file
 -->
<input type="data" name="data">
<br />
<input type="submit" name="" id="">Submit</input>
</form>
<!-- If we use get instead of post, we need to change
INPUT_POST to INPUT_GET -->