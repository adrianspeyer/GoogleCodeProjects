
<head>
<title>Example Page </title>
</head>


<h1>Tons of great content</h1>

Bla
Bla



<?php

//Fake cron caller

$RunLog = 'cronrun.log'; //make sure you have this file downloaded too
if (file_exists($RunLog)) { 
    $lastRun = file_get_contents($RunLog); 
    if (time() - $lastRun >= 3600) { //This will check last time file ran. Right now if it's less than an hour it will rerun your file.
$cron= file_get_contents('http://'.$_SERVER['SERVER_NAME'].'/pathtofolder/cron.php');  // here you put the  link for your file or the php code 
                 file_put_contents($RunLog, time()); 
			
    } 
} 

?>