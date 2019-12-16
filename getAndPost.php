<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
<form action="getAndPost.php" method="post"> <!--more secure: it does not show in url-->
<input type="text" name="string1">
<br>
<input type="text" name="string2">
<br>
<input type="password" name="string3">
<br>
<input type="text" name="string4">
<input type="submit">
</form>
    <?php
    
    $s1 = $_POST["string1"];
    $s2 = $_POST["string2"];
    $s3 = $_POST["string3"];
    $s4 = $_POST["string4"];
    ANSWER: echo " gone is the $s1 and $s2 has to $s3 here dear $s4 ";
    ?>
</body>
</html>