<?php
function readFileContent($filename) {
    try {
        if (!$file = fopen($filename, "r")) {
            throw new Exception("File not found.");
        }
    } catch (Exception $e) {
        // Log the exception or perform other actions
        throw $e; // Re-throw the exception.
    }
}
try {
    readFileContent("somefile.txt");
} catch (Exception $e) {
    echo "Error in file handling: " . $e->getMessage();
}
?>
