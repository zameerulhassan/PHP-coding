<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
    <?php
    //global
    global $Name;
    $Name = "Zam's";
 
    echo "$Name";
    
    echo "<br>";
    //static variables.
    function test(){
        static $count =0;
        echo $count;
        $count++;
    }
    test();
    echo "<br>";
    test();
    echo "<br>";
    test();
    echo "<br>";
    test();
    echo "<br>";
    test();
    echo "<br>";
    Test(); //functions are case-INSENSITIVE
    ECHO "<br>";
    TEST();
    //static $int = 1+2; // Disallowed (will produce a Parse error)
    //static $int = sqrt(144); // Disallowed.

    //superglobal variables, which means that they are provided by the PHP (SESSION, _GET etc)
    ?>
</body>
</html>