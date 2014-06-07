<?php

//Steps to make this file work
//1- Rename this file to whatever you want and include in your pages of your website with an include call. Fro example if you rename this file code.php, 
//add this to your PHP code at the top:  include("code.php");
//2- Get GEOIP  files from http://www.maxmind.com/app/geoip_country : You need two files geoip.inc and GeoIP.dat
//3-Have fun!
//Code license GNU GPL v3

include("geoip.inc");
$gi = geoip_open("./GeoIP.dat",GEOIP_STANDARD);
$userco = geoip_country_name_by_addr($gi, $_SERVER[REMOTE_ADDR]);
$okc = array('Canada', 'United States'); //array of countries you want to let in

// Decide what to do with your country arrays
if (in_array($userco,$okc))
  echo " "; //allowed in 
else
 header( 'Location: http://www.google.com/' );//this is where to send countries not matched. It can be anywhere you want where this redirect code is not added

// This is a check to update if you need check maxmind file every 30 days if you do not have cron ability.


/*
// checks if GEOIP file is greater than 30 days
$filename = 'GeoIP.dat'; //location of your GEOIP file
if ($filename==mtime+30) {
    
// Get Maxmind data
//inspired by http://www.azproxies.com/proxy-articles/how-to-automatically-update-geolite-country.html

$ZP=@gzopen("http://www.maxmind.com/download/geoip/database/GeoIP.dat.gz","r");
$UnzippedData=@gzread($ZP,2097152); // 2MB
@gzclose($ZP);

// Check we have data
if (strlen($UnzippedData)>0)
   {
   // Write data to local file
   $LZFP=@fopen($filename,"w+"); //location of your GEOIP file
   @fwrite($LZFP,$UnzippedData);
   @fclose($LZFP);
   }
}
*/

geoip_close($gi);

?>