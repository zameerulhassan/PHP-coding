<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php


      echo "************String PADDING*************";
      $h = "Yamaan";
      echo "<pre>"; //enable veiwing of spaces
      //echo "<br />";
      printf ("[%s]\n", $h);
      //echo "<br />";
      printf ("[%10s]\n", $h);//right justify
      //echo "<br />";
      printf ("[%-10s]\n", $h); //left justify
      //echo "<br />";
      printf ("[%010s]\n", $h); //
      //echo "<br />";
      printf ("[%'#10s]\n\n", $h);


      $d = 'Doctor House';
      printf("[%10.8s]\n", $d); // Right justify, cutoff of 8 characters
      printf("[%-10.6s]\n", $d); // Left justify, cutoff of 6 characters
      printf("[%-'@10.6s]\n", $d); // Left justify, pad '@', cutoff 6 chars
      echo "**************";
      echo "<br />";
      $out = sprintf("The result is: $%.2f", 123.42 / 12);
      echo $out;
      echo "<pre>"; //enable veiwing of spaces
    ?>
</body>
</html>