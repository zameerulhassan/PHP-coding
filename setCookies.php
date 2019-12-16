<?php
	$name = "";
	
	if (isset($_REQUEST['logoff'])) {

		setcookie('demo', "", time()-84600);
	}
	
	if  (isset($_COOKIE['demo'])) {
		echo "Cookie exists<br />\n";
		
		echo "<form action='' method='post'>
		      <input type='submit' name='logoff' value='log out!' />
			  </form>";
		
		echo "<a href='cookieTest.php'>refresh page</a><br />\n";
		die ("<h1>{$_COOKIE['demo']}</h1>\n");
	}



	if (isset($_REQUEST['makeit'])) {
		$value = implode("\t",array($_REQUEST['name'], "test" , "test1"));
		setcookie('demo', $value, time()+100000000);
		echo "Making Cookie<br />\n";
		echo "<a href='cookieTest.php'>refresh page</a><br />\n";
		
		die ("<h1>{$_REQUEST['name']}</h1>\n");
	}

	echo "<form method='get' action=''>
		  name <input type='text' name='name' />
		  <input type='submit' name='makeit' value='Make cookie' />
		  </form>";

?>