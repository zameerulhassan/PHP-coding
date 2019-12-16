<?php
echo time()."<br>";

echo "current time is\t ";
echo date('H:i:s',time());
echo "<br />";
echo date('d M Y',time());
echo "<br />";
echo date('d m Y',time());

echo "<br />";
echo date('d M Y @ H:i:s',time());

echo "<br />";
echo date('D d M Y @ H:i:s',time());


echo "<br />";
echo date('D d M Y @ H:i:s',time()-60);//1 min earlier

echo "<br />";
echo date('D d M Y @ H:i:s',time()+60);//1 min later

echo "<br />";
echo date('D d M Y @ H:i:s',strtotime('+1 week'));//1 week later
echo "<br />";
echo date('D d M Y @ H:i:s',strtotime('+1 month'));//1 month later
echo "<br />";
echo date('d M Y @ H:i:s',strtotime('+1 year'));//1 year later

echo "<br />";
echo date('d M Y @ H:i:s',strtotime('+1 week 12 hours 30 minutes '));//specific period later
?>