<!--update location of 'browscap' in php.ini file [browscap] http://php.net/browscap browscap = extra/browscap.ini -->
<!-- https://www.youtube.com/watch?v=mdoRUbvIZ28&list=PL442FA2C127377F07&index=67 -->

<?php
//how to detect client's browser
//may be you want to recommend user to use another brwoser for your website.
$browser= get_browser(null, true);//take 2 arguements. [1st = 'SERVER-HTTP_AGENT 2nd bool do you want array as retunr type']
echo "<pre>";
//print_r($browser);
//echo "</pre>";  //KYE from array: [browser] => Firefox
//echo $browser['browser'];
if($browser['browser']=='Firefox'){
    echo "you are using ".$browser['browser']. " for best results please use Chorme";
}

?>