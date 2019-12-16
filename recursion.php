<?php
function recursion($number){
    if($number==0){
        return 1;
    }
    else{
        return ($number*recursion(($number-1)));
    }
}
echo "The factorial of is :". recursion(100);
?>