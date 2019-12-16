<?php // shotStatements.php
$var = false;
echo ($var)? "You are logged in": "You are NOT logged in"; //replaces longer if statement
echo "<br  />";

$age=20;
$scor=15;
echo ('your score is  :' . ($scor>10 ? ($age>10 ? 'Average':'Exceptional'):($age >10 ? 'Horrible':'Average')));



$loggedIn = true;

?>


<div>
<?php if($loggedIn) {?>
    <h1>Welcome User</h1>
<?php } else { ?>
<h1>Welcome Guest</h1>
<?php } ?>
</div>

<!-- OR -->
<div>
<?php if($loggedIn): ?>
    <h1>Welcome User</h1>
<?php else: ?> 
<h1>Welcome Guest</h1>   
<?php endif ?>
</div>