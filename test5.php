<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
<form action="test5.php" method="get">
<input type="text" name="string1">
<br>
<input type="text" name="string2">
<br>
<input type="text" name="string3">
<br>
<input type="text" name="string4">
<input type="submit" value='Submit to process'>
</form>
    <?php
    
    if (isset($_GET["string1"]))
    $s1 = $_GET["string1"];
    if (isset($_GET["string2"]))
    $s2 = $_GET["string2"];
    if (isset($_GET["string3"]))
    $s3 = $_GET["string3"];
    if (isset($_GET["string4"])){
    $s4 = $_GET["string4"];
    }
    else 
    $s4 = "";
    //if (isset($_GET["string4"]))
    ANSWER: echo " gone is the  here dear $s4 ";
    //Option-2
    // if(isset($_GET['submit'])){
    //     $s1 = $_GET["string1"];
    //     $s2 = $_GET["string2"];
    //     $s3 = $_GET["string3"];
    //     $s4 = $_GET["string4"];
    // }
    ?>
</body>
</html>