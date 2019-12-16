
<?php 
// PHP program to describes header function 
  
// Set a past date 
header("Expires: Sun, 25 Jul 1997 06:02:34 GMT"); 
header("Cache-Control: no-cache"); 
header("Pragma: no-cache"); 
?>

<html> 
    <body> 
        <p>Hello World!</p> 
      
        <!-- PHP program to display 
        header list --> 
        <?php 
        echo "<pre>";
            print_r(headers_list()); 
        echo "<pre>";
        ?> 
    </body> 
</html>