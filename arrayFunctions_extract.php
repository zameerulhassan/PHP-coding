<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
       /* 
        Sometimes it can be convenient to turn the key/value pairs from an array into PHP
        variables. One such time might be when processing the $_GET or $_POST variables sent
        to a PHP script by a form.

        this converts an associative array and keeps elements i.e. key/value pairs in separate variables.
       */
    echo "<br />";
    echo "<br />";
    echo "***************************************<br />";
    echo "Extract  <br />";
    echo "*************************************** <br />";
    $temp=explode(' ', "Hello there My Name Zameer Ul Hassan, and I live in Lethbridge");
    print_r($temp);

    ?>
</body>
</html>