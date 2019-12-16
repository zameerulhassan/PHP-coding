<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
<h1>This code prints multiplication table</h1>
    <div style="background-color:silver;color:black;padding:20px;">
        <form action="" method="POST">
            Enter no. of rows<br /><input type="text" name="col">
            <br>
            Enter no. of columns<br /><input type="text" name="rows"><br />
            <input type="submit" name="submit" value="Print table">
        </form>
    </div>
    <?php

    if(isset($_POST['submit'])){
        $col=$_POST["col"];
        $rows=$_POST["rows"];
        echo "<table border=1 width=150 style=text-align:center>";
            for($i=1; $i<=$col; $i++){
                echo "<tr>";
                for($j=1;$j<=$rows; $j++){
                    echo "<td>";
                    echo $j * $i;
                    echo "</td>";
                    //echo "<br />";
                }
                echo "</td>";
               // echo "<br />";
            }
        echo "</table>";
    }
    

    
    ?>
</body>
</html>