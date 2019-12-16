<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
    $myArray =array("zam", "Mashalay", "Nuztay", "Yamaani", "Nasri");
    
    

    echo $myArray[2];
    echo "<br>";
    echo count ($myArray);
    echo "<br>";
    print_r ($myArray);
    echo "<br>";
    echo count ($myArray);
    $papers[]="injet";
    $papers[]="HP"; //if we add new items this way without specifying index, items is added at the end.
    $papers[]="Dell";
    echo "<br>";
    print_r($papers);
    ?>
</body>
</html>