<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
       //explode returns an array from string.
    echo "<br />";
    echo "<br />";
    echo "***************************************<br />";
    echo "Explode  <br />";
    echo "*************************************** <br />";
    $temp=explode(' ', "Hello there My Name Zameer Ul Hassan, and I live in Lethbridge");
    print_r($temp);

    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "***************************************<br />";
    echo "Replace  <br />";
    echo "*************************************** <br />";
    $temp2=str_replace(" ","***", "Hello there My Name Zameer Ul Hassan, and I live in Lethbridge");
    print_r($temp2);
    echo "<br />";
    echo "<br />";
    echo "<br />";
    echo "***************************************<br />";
    echo "Explode  <br />";
    echo "*************************************** <br />";
    $temp3=explode('***', $temp2);
    print_r($temp3);
    ?>
</body>
</html>