<?php
//Fake Cron was created as an experiment in enviroment without access to Cron. Please test in your enviroment before launch.
//Use code in caller.php on the page where a visit to it will launch the CRON job. For a site with low taffic the index page is fine.
//Make sure you also create a blank text file and save as "cronrun.log" (File already included in archive). 
//Cron will not work if this file is not present. Modify run time on line 13, which is now set at 1 hour in seconds.
//Line 14, you need to identify the exact folder where the cron file is located. Default cron job included will dump a database in this folder.

$RunLog = 'cronrun.log'; //make sure you have this file downloaded too
if (file_exists($RunLog)) { 
    $lastRun = file_get_contents($RunLog); 
    if (time() - $lastRun >= 3600) { //This will check last time file ran. Right now if it's less than an hour it will rerun your file.
$cron= file_get_contents('http://'.$_SERVER['SERVER_NAME'].'/pathtofolder/cron.php');  // here you put the  link for your file or the php code 
                 file_put_contents($RunLog, time()); 
			
    } 
} 


?>