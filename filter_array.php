<?php // filter_array.php
# Validate multiple fields. arrays.
$myfilters = array(
    "data"=>FILTER_VALIDATE_EMAIL,
    "data2"=> array(
        "filter"=>FILTER_VALIDATE_INT,
        "options"=>array(
            "min_range"=>1,
            "max_range"=>100
        )
    )
);
print_r(filter_input_array(INPUT_POST,$myfilters));



?>
 <form method ="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
 <!--//using superglobal OR we can put validate.php fileitself
 but this will work even if we change the name of php file
 -->
Email<input type="data" name="data">
<br />
User ID<input type="data" name="data2">
<br />
<input type="submit" name="" id="" value="submit"></input>
</form>