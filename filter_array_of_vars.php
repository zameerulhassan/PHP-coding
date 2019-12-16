<?php // filter_array_of_vars.php
# Validate and filter vars in an  arrays.
$arr=array(
    "name"=>"zamir ul hassan",
    "age"=> "145",
    "email"=>"zameerulhassan@gmail.com"
);
$myfilters = array(
    "name"=>array(
        "filter"=>FILTER_CALLBACK,//will allow us to apply/call a function on this item
        "options"=>"ucwords"
    ),
    "age"=>array(
        "filter"=>FILTER_VALIDATE_INT,
        "options"=>array(
            "min_range"=>1,
            "max_range"=> 120
        )
    ),
    "email"=>FILTER_VALIDATE_EMAIL
);
print_r(filter_var_array($arr, $myfilters));
//if the above criteria is not met, it will not go thru.

