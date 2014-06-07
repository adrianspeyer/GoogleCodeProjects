<?php 
error_reporting(0);

$file = 'archive.txt';
$newfile = 'archive.csv';

if (!copy($file, $newfile)) {
    echo "failed to copy $file...\n";
}

?>

<?php
$file = 'archive.csv';  
$filename = 'archive.csv'; 
header("Pragma: public"); 
header("Cache-control: private"); 
header('Content-type: text/csv');
header('Content-disposition: attachment;filename=archive.csv'); 
$row = 1;
if (($fp = fopen("archive.csv", "r")) !== FALSE) {
    while (($data = fgetcsv($fp, 50000, "|")) !== FALSE) {
        $num = count($data);
                $row++;
        for ($c=0; $c < $num; $c++) {
            echo $data[$c]."|<br />\n";
        }
    }
    fclose($fp);}
unlink( $filename ) ;
?>