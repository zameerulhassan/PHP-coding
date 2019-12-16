<!DOCTTYPE html>
<html>
<head>
    <meta charset="utf-8"> 
    <title></title>
</head>
<body>
    <?php
    
    //$timestamp;: integer number representing a date and time based on the number of seconds since 00:00 AM on January 1, 1970)

 function longdate($timestamp){
     return date("l M jS Y", $timestamp); //F=full month, M=short Month, Y=year,suffix for the day 
 }
 echo longdate(time());
 echo "<br>";
 echo longdate(time()-17*24*60*60); //print out the date 17 days ago.


 function longdate2($timestamp){
     $temp= date("l M jS Y", $timestamp);
    return "the date is $temp";
 }
    echo "<br>";
 echo longdate2(time());

    ?>
</body>
</html>