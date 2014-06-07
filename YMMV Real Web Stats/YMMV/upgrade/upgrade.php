<?php 
error_reporting(0);

$file = '../index.php';
$newfile = '../backup/index.bak.php';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}




//files below are the items to replace
$file = './files/newindex.php';
$newfile = '../indexroot.php';

if (!copy($file, $newfile)) {
      echo "failed to copy $file...\n";
    exit;
}

 
?>

Your YYMV is now updated, please click <a href="./deleteupgradefiles.php">here</a> to delete update files.