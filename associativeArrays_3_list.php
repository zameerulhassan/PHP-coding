<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
    //instead of creating array and putting into a variable, 
    //    $names =array("Mashlay","Yamaani");
    //we can directly put them in a list of variables 
    //each variable reprsents an element inside a array.

    list($var1, $var2) =array("Mashlay","Yamaani");
    

    echo "<br />";
    echo "<br />";
    echo "***************************************<br />";
    echo "Using list  <br />";
    echo "*************************************** <br />";
    echo "<br />";
    echo "<br />";
    echo "1st element: = $var1 2nd element: = $var2";
    ?>
</body>
</html>