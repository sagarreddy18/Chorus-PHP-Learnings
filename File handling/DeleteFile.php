<?php
if (file_exists("D:/DemoFileHandling.txt")) {
   unlink("D:/DemoFileHandling.txt");
   echo "The file got deleted.";
} else {
    echo "The file does not exist.";
}
?>