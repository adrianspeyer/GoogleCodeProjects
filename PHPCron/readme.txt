
PHP Fake Cron

Fake Cron was created as an experiment in enviroment without access to Cron. Please test in your enviroment before launch.
Use code in caller.php on the page where a visit to it will launch the CRON job. For a site with low taffic the index page is fine.
Make sure you also create a blank text file and save as "cronrun.log" (File already included in archive). 
Cron will not work if this file is not present. Modify run time, which is now set at 1 hour aka 3600 seconds.
You also need to identify the exact folder where the cron file is located. Default cron job included will dump a database in this folder.

Have fun!

Code license: GNU GPL v3