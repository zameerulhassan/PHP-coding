<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
<form action="test4.php" method="get">
<input type="number" name="num1">
<br>
<input type="number" name="num2">
<input type="submit">
</form>
    <?php
    //calculator
    //Answer: echo $_GET["num1"] + $_GET["num2"];
    //OR
    $num1=$_GET["num1"];
    $num2=$_GET["num2"];
    ANSWER: echo $num1+$num2;
    ?>
</body>
</html>