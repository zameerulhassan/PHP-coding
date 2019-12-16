<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
       /* 
    inverse of extract
    multiple variables have values.
    want to combine them into assciative array.
       */
    echo "<br />";
    echo "<br />";
    echo "***************************************<br />";
    echo "compact i.e. Inverse of extract.  <br />";
    echo "*************************************** <br />";
    
    $var1 = "zam";
    $var2 = "Mashaley";
    $var3 = "Maani";
    
    $names = compact("var1","var2", "var3");
    print_r($names);

    ?>
</body>
</html>