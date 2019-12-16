<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
 <form action="associativeArrays.php" method="post">
 <input type="text" name="student" id="">
 <input type="submit" name="" id="">
 </form>
    <?php
    $grades = array("zam"=>"C+", "Mashalay"=>"A+", "Nuztay"=>"D", "Yamaani"=>"B+", "Nasri"=>"F");
    
    

    echo $grades[$_POST["student"]];
    echo "<br>";
    //another method

    $Grades['zam']="A-";
    $Grades['Mashalay']="A++";
    $Grades['yamni']="mera putar";
    $Grades['nasir']="meri putir";

    echo $Grades['yamni'];
    ?>
</body>
</html>