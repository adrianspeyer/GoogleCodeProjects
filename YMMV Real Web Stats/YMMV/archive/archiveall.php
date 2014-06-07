<?php require($_server['DOCUMENT_root']."../admin/settings.php");?>
<?php 
//archive all files
$txt1 = file_get_contents('../tracker/log.txt'); 
$txt1 .= "\n" . file_get_contents('../tracker/GAlog.txt'); 
$txt1 .= "\n" . file_get_contents('../tracker/ABPlog.txt'); 
$txt1 .= "\n" . file_get_contents('../tracker/NSlog.txt');

$fp = fopen('../archive/archive.txt', 'w'); 
if(!$fp) 
    die('Could not create / open text file for writing.'); 
if(fwrite($fp, $txt1) === false) 
    die('Could not write to text file.'); 

header("Location: ../index.php");

?>
