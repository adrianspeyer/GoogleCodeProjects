<?PHP

// Set your filename
$file="./tracker/ABPlog.txt";


// Open the file for reading
$handle = fopen($file, "r");

// Loop through the file until you reach the last line
while(!feof($handle)){

// Read a line
$line = fgets($handle);


// Increment the counter
$lineCountABP++; 

}

// Release the file for access
fclose($handle);

// Display number of lines

echo ($lineCountcontrol-$lineCountABP);
?>