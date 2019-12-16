<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
    <?php
    //print is function - can be used in complex expressions, echo is PHP construct 

    $b =true;
    $b ? print "TRUE" : print "FALSE";
    
    echo "<br>";
    echo "<br>";
    echo "<hr>";
    $b =0; //means false
    $b ? print "TRUE" : print "FALSE";
    ?>
</body>
</html>