<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
    <?php
    
    echo "<br>";
    //ucfirst Upper_Character Fist Function.
    function fix_name($s1,$s2, $s3){
        $s1=ucfirst(strtolower($s1));
        $s2=ucfirst(strtolower($s2));
        $s3=ucfirst(strtolower($s3));
        return ($s1 . " ". $s2." ".$s3);

    }

    echo fix_name("WILLIAM", "henry", "gatES");
    
    //function returning multiple values.
    function fix_name2($s1,$s2, $s3){
        $s1=ucfirst(strtolower($s1));
        $s2=ucfirst(strtolower($s2));
        $s3=ucfirst(strtolower($s3));
        return array($s1,$s2,$s3);

    }
    echo "<br>";
    echo "function returning multiple values";
    echo "<br>";
    $names=fix_name2("WILLIAM", "henry", "gatES");
    echo $names[0] ." ".$names[1]. " ".$names[2];



    echo "<br>";
    echo "checking whether some function exits for a specific version of PHP or not";
    echo "<br>";
    if(function_exists("array_combine")){
        echo "Function exits";
    }
    else{
        echo "Function doest not exit- better write your own";
    }
    
    echo "<br>";
    if(function_exists("print_r")){
        echo "Function exits";
    }
    else{
        echo "Function doest not exit- better write your own";
    }
    echo "<br>";
    if(function_exists("strlen")){
        echo "Function exits";
    }
    else{
        echo "Function doest not exit- better write your own";
    }
    echo "<br>";
    echo phpversion();
    ?>
</body>
</html>