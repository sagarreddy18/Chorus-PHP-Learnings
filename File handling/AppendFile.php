<?php
$filename ="D:/DemoFileHandling.txt";

if (file_exists($filename)) {
    $file = fopen($filename, "a");
fwrite($file, "\nHello Sagar Reddy Thoutu!");
fclose($file);
echo "Text file updated with new text";
} else {
    echo "Sorry we did not get a file to update!";
}

?>