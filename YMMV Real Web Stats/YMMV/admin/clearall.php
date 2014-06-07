<?php require($_server['DOCUMENT_root']."./settings.php");?>
<?php 
//clear all files
$fp1 = fopen('../tracker/log.txt', 'w'); 
$fp2 = fopen('../tracker/GAlog.txt', 'w'); 
$fp3 = fopen('../tracker/ABPlog.txt', 'w'); 
$fp4 = fopen('../tracker/NSlog.txt', 'w'); 

header("Location: ../index.php");

?>