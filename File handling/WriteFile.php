<?php
   $filename ="D:/DemoFileHandling.txt";
   $file = fopen($filename, "w");
   fwrite($file, "This text will be appended.");
fclose($file);
echo "Text added."
?>