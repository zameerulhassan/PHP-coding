<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
    <?php
    //variable start with $ sign
    $name="zameer Ul hassan";
    $age=46;
    echo "His name is $name & his age is $age";

    // strings 
    //numbers => int decimals
    //boolean.
    //null

    //string functions
    //strtolower
    echo ("<br>");
    echo strtolower($name);
    echo ("<br>");
    echo strlen($name);
    echo ("<br>");
    echo "Hallawalla"[0];
    $name[0]="D";
    echo ("<br>");
    echo ($name);
    echo ("<br>");
    echo str_replace("Ul", "Mustafa", $name);
    //echo ($name);
    echo ("<br>");
    echo substr($name, 10); //substring

    echo ("<br>");
    echo substr($name, 10, 3); //substring start - total number of characters
    ?>
</body>
</html>