<?php

//This is a basic Cron Job created to spit out a dump of a SQL databse in GZIP. File will be created where cron.php is located.
//set file permission at 400 with CHMOD

$dbhost   = "localhost"; //databasehost
$dbuser   = "root"; //database user
$dbpwd    = "root"; //databse password
$dbname   = "test"; //database name

$dumpfile = $dbname . "_" . date("Y-m-d_H-i-s") . ".gz";

passthru("/usr/bin/mysqldump --opt --host=$dbhost --user=$dbuser --password=$dbpwd $dbname  | gzip> $dumpfile");

?>


