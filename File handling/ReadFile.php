<?php
$filename = "D:/DemoFileHandling.txt";

if (file_exists($filename)) {
    $file = fopen($filename, "r");
    $content = fread($file, filesize($filename));
    fclose($file);  
    echo "Current Content:\n$content\n";
} else{
    echo "File is no longer available to Read";
}
    ?>