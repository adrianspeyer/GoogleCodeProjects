<?php require($_server['DOCUMENT_root']."./admin/settings.php");?>
<?php
//*************************************************************************
//*     		__   ____  __ __  ____   __			  *
//*			\ \ / /  \/  |  \/  \ \ / /                       *
//*  			 \ V /| |\/| | |\/| |\ V / 			  *
//*   			  |_| |_|  |_|_|  |_| \_/                         *
//*                                                                       *
//*************************************************************************
//*                          Created by Adrian Speyer  			  *
//*                      http://www.adrianspeyer.com                 *
//*                      This script released unde GPL V3.		  *
//*                    Please make sure this notice is not removed        *
//*************************************************************************
?>
<html>
<head>
<title>YMMV Stats</title>
<link href="style.css" rel="StyleSheet" type="text/css">

</head>
<body>
<center>
<h2><a href="http://code.google.com/p/ymmv-stats">YMMV Stats</a></h2>
</center>
<table width="100%">
	<tr>
		
		<td valign="top" class="main">
	
<center><h1>Summary Data</h1></center>

<?php 
//how fresh are the results
$last_modified = filemtime("./tracker/log.txt"); 
print "<center>Stats updated as of " . date("l, dS F, Y @ h:ia", $last_modified); 
?> 
<br>
<br>
<center>
<table><tr><td valign="top">

<table class="pages" cellspacing="0" cellpadding="5" width="265">
	<tr>
		<td class="bluebold">Number of Hits: </td>
		<td align="right"><?php include './sum/controllogsum.php';?></td>
	</tr>
	</table>

<table class="pages" cellspacing="0" cellpadding="5" width="265">
	<tr>
		<td class="bluebold">Blocking Google Analytics: </td>
		<td align="right"><?php include './sum/galogsum.php';?></td>
	</tr>
	
</table>

<table class="pages" cellspacing="0" cellpadding="5" width="265">
	<tr>
		<td class="bluebold">Using AdBlock: </td>
		<td align="right"><?php include './sum/adlogsum.php';?></td>
	</tr>
<table class="pages" cellspacing="0" cellpadding="5" width="265">	
	<tr>
		<td class="bluebold">Using No Script: </td>
		<td align="right"><?php include './sum/nslogsum.php';?></td>
	</tr>
</table>

<?php
$blocked =  ($lineCountGA);
$not_blocked = @round(($blocked/$lineCountcontrol)*100,2);?>


<table class="pages" cellspacing="0" cellpadding="5" width="265">
	<tr>
		<td class="bluebold"> Google Analytics Accuracy: </td>
		<td align="right"><?=$not_blocked;?></td>
	</tr>
	
</table>	

</td></tr></table>

</center>
<br>
<center>

<?php
//Log size
$log_size1 = filesize('./tracker/log.txt');
$log_size2 = filesize('./tracker/NSlog.txt');
$log_size3 = filesize('./tracker/GAlog.txt');
$log_size4 = filesize('./tracker/ABPlog.txt');
$log_size5 = ($log_size1+$log_size2+$log_size3+$log_size4);
$log_size5 = round($log_size5/1000, 2);
echo('Your Log size is '.$log_size5.' kilobytes<br><br>');
?>


<?php
//Archive log size
$archive_size = filesize('./archive/archive.txt');
$archive_size = round($archive_size/1000, 2);
echo('Your Archive size is '.$archive_size.' kilobytes<br><br>');
?>


| <a href="./archive/archiveall.php">Archive Log</a> | <a href="./archive/archivetable.php">View
Archive Log</a> | <a href="./archive/cleararchive.php">Clear Archive Log </a>|<a
href="./admin/clearall.php"> Reset Logs</a> |<br>
<p><b>NB:</b> NoScript, means user has Javascript disabled. User could be using NoScript Plugin, but it may also include bots.
</center>

<?php include("./version/version.php"); ?>
<center><small><small><b><br>
Version :<?php echo $YMMV_version; ?> </b> <a href="./version/update.php">
(update)</a></small></small><br></center>


	</tr>
</table>

<center>
<div style="text-align: center;"><a
href="http://code.google.com/p/ymmv-stats/wiki/Get_Invovled"><img
style="border: 0px solid ;" alt="Help make YMMV Web Stats better, get involved!"
title="Help make YMMV Web Stats better, get involved!"
src="./images/helpmakebetter.png"></a></div>
</center>

<?php
//onload will check size of log, at 1GB you will get warning emailed to you as extra backup.
// information is in settings.php

if (filesize(LOGFILE) > 1024*1024*1024) { 

mail(EMAIL_LOG, 'You might have missed it, but your Log file is really large', sprintf("Your log file is getting quite large. It is suggested you archive your logs ASAP.", LOGFILE));
	exit;
} else if (filesize(LOGFILE) == 0) { exit; }
?>


</body>
</html>