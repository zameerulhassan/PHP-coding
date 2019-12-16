<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php

    $Grades['zam']="A-";
    $Grades['Mashalay']="A++";
    $Grades['yamni']="mera putar";
    $Grades['nasir']="meri putir";
    $j=0;
    echo "Using index number ";
    foreach($Grades as $item){
        echo "$j       : $item <br />" ;
        ++$j;
        //OR simply... $j variable is required actually.
        //echo "$item <br />" ;
    }
    echo "<br />";
    echo "<br />";
    echo "Using key/value pair without index number";
    echo "<br />";
    echo "<br />";
    foreach($Grades as $item=>$description){
        echo "$item       : $description <br />" ;
    }

    echo "<br />";
    echo "<br />";
    echo "***************************************<br />";
    echo "Using list FUNCTION with each FUNCTION <br />";
    echo "*************************************** <br />";
    echo "<br />";
    echo "<br />";
    while(list($item, $description) = each($Grades))
        echo "$item       : $description <br />" ;

        //each function returns a Boolean .. 
        //while will keep looping if each is true.
        //each returns an array of key/value pairs
        /*
    In this example, a while loop is set up and will continue looping until the each function
    returns a value of FALSE. The each function acts like foreach: it returns an array containing
    a key/value pair from the array $paper and then moves its built-in pointer to the
    next pair in that array. When there are no more pairs to return, each returns FALSE.
    The list function takes an array as its argument (in this case, the key/value pair returned
    by function each) and then assigns the values of the array to the variables listed
    within parentheses.
         */
    ?>
</body>
</html>