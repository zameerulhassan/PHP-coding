<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
       /* 
        printf expects you to pass an argument that it will display using that format

       */
      echo "%d for Decimal ";
      echo "<br />";
      printf("There are %d items in your basket", .3); //displays only decimal
      echo "<br />";
      printf("There are %d items in your basket", 3);
      echo "<br />";
      printf("There are %d items in your basket", 45453.3);
      echo "<br />";
      echo "<br />";
      echo "%b for Binary ";
      echo "<br />";
      printf("There are %b items in your basket", 3);
      echo "<br />";
      echo "%f for floating ";
      printf("There are %f items in your basket", 43);
      echo "<br />";
      echo "%s for string ";
      echo "<br />";
      printf("There are %s items in your basket", 45000);
      echo "<br />";
      printf("There are %d items in your basket", 45453.3);
      echo "<br />";
      printf("My name is %s. I'm %d years old, which is %X in hexadecimal",'Simon', 33, 33);

      echo "<br />";
      echo "<br />";
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
    ?>
</body>
</html>