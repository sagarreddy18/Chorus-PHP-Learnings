<?php $size = filesize("D:DemoFileHandling.txt"); // 
$lastModified = date("F d Y H:i:s.", filemtime("DemoFileHandling.txt")); // Get last modified time
echo "Size: $size bytes, Last Modified: $lastModified";
?>
