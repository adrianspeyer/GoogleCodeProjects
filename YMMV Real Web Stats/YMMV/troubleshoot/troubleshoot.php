<?php require($_server['DOCUMENT_root']."../admin/settings.php");?>


<h1>Issues found:</h1>
<p>
<?php 
$filename = '../../YMMV.php';
if (file_exists($filename)) { 
   echo " "; 
} else { 
   echo "Warning $filename does not exist. This means no results are tracked. This could be your issue! If you still need help get support <a href='http://code.google.com/p/ymmv-stats/issues/list'>here.</a>"; 
} 
?> 
</p>
<p>
<?php 
$filename = 'TSlog.txt'; 
if (file_exists($filename)) { 
   echo " "; 
} else { 
   echo "Warning $filename does not exist. This means no results are logged. Check file permissions of tracker folder. This could be your issue! If you still need help get support <a href='http://code.google.com/p/ymmv-stats/issues/list'>here.</a>"; 
} 
?> 
</p>
<p>
<?php 
$filename = '../admin/settings.php'; 
if (file_exists($filename)) { 
   echo " "; 
} else { 
   echo "Warning $filename does not exist. This means your stats are public. You need this file to remain private. This could be your issue! If you still need help get support <a href='http://code.google.com/p/ymmv-stats/issues/list'>here.</a>"; 
} 
?> 
</p>
<p>
<?php 
$filename = '../tracker/noscript.php'; 
if (file_exists($filename)) { 
   echo " "; 
} else { 
   echo "Warning $filename does not exist. This means no results are logged. Check tracker folder for right files. This could be your issue! If you still need help get support <a href='http://code.google.com/p/ymmv-stats/issues/list'>here.</a>";
 } 
?> 
</p>
<p>
<?php 
$filename = '../version/version.php'; 
if (file_exists($filename)) { 
   echo " ";
} else { 
   echo "Warning $filename does not exist. This could mean you are not using an offical copy of the script. Visit the official site <a href='http://code.google.com/p/ymmv-webstats/'>here.</a>"; 
} 
?> 
</p>
<p>


<?php
$filename1 = "../../YMMV.php";
$filename2 = "../admin/settings.php";
$filename3 = "../tracker/noscript.php";
$filename4 = "../version/version.php"; 
$filename5 = "TSlog.txt"; 

if (file_exists($filename1)&&file_exists($filename2)&&file_exists($filename3)&&file_exists($filename4)&&file_exists($filename5))
{
echo "<h2>WOOT! No issues seems to be found</h2> ";;
}
?>
</p>
 

==============================================================================================================================================================================================================
<p>
<h3>If you're still stuck, get support <a href='http://code.google.com/p/ymmv-stats/issues/list'>here.</a></h3>
<p>

<?php
//delete temp test of log file in troubleshoot
$filename  = 'TSlog.txt';
 
 
// Here you can define after how many
// minutes the files should get deleted
$expire_time    = 1; 
 
{
 
    // Read file creation time
    $FileCreationTime = filectime($Filename);
 
    // Calculate file age in seconds
    $FileAge = time() - $FileCreationTime; 
 
    // Is the file older than the given time span?
    if ($FileAge > ($expire_time * 1)){
 
         
        print " ";
 
        // delete files:
        $fp = fopen("$filename", w); 
fclose($fp);  
    }
 
}
?>

