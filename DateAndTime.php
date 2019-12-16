<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>

    <?php
      echo "************DATE AND TIME*************";
      echo "<br />";
      echo time(); //seconds from January 1, 1970

      echo "<br />";
      echo mktime(0, 0, 0, 1, 1, 2000); //or the first second of the first minute of the first hour of the first day of the year 2000
      echo "<br />";
      echo date("l F jS, Y - g:ia", time());
      echo "<br />";

      echo date(" d M Y");
      echo "<br />";

      echo "************Check Date Function*************";
      echo "<br />";
    $month = 9; // September (only has 30 days)
    $day = 31; // 31st
    $year = 2012; // 2012
    if (checkdate($month, $day, $year)) echo "Date is valid";
    else echo "Date is invalid";
    ?>
</body>
</html>