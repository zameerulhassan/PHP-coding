<?php

$handle= fopen('names3.txt', 'a'); 
//both fopen('names3.txt', 'w') & fopen('names3.txt', 'a') will create file, if it didn't exit

//$handle2= fopen('names2.txt', 'r'); //but this will not create a new file, since it is read access
if(isset($_POST['name'])){   //
    $name=$_POST['name'];
    fwrite($handle, $name.",");
    //$name=""; //redundent
    fclose($handle);
}

echo "all records are written";
?>
<form action="" method="POST">
<label>Insert Name</label>
<input type="text" name="name"><br />
<input type="submit" name="submit" value="Submit">
</form>
<?php
echo "Now reading from file"."<br />";

$readin=file('names3.txt');
foreach($readin as $names){
    echo $names ."<br />";
}
?>