<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
    echo "<pre>"; //enable veiwing of spaces
       /* 
        NUMBERS and STRING Padding

       */
      
      echo "************PRECISION*************";
      echo "<br />";
      
      printf ("Total Amount is $%.2f",245.5456) ; //internally it is stored full number, but displays 2 flaots

      echo "<br />";
      echo "************PADDING*************";
      echo "<br />";
      //Pad to 15 spaces, fill with zeros
      printf("The result is $%015f\n", 123.42 / 12);
      echo "<br />";
      printf("The result is $%15f\n", 123.42 / 12);
      echo "<br />";
      printf("The result is $%015.2f\n", 123.42 / 12);
      echo "<br />";
      printf("The result is $%'#15.2f\n", 123.42 / 12);

      echo "<br />";
      echo "<br />";
      echo "************String PADDING*************";
      $h = "Yamaan Ahmed Khan";
      echo "<br />";
      printf ("[%s]\n", $h);
      echo "<br />";
      printf ("[%10s]\n", $h);//right justify
      echo "<br />";
      printf ("[%-10s]\n", $h); //left justify
      echo "<br />";
      printf ("[%010s]\n", $h); //
      echo "<br />";
      printf ("[%'#10s]\n\n", $h);
      echo "<pre>"; //enable veiwing of spaces
    ?>
</body>
</html>