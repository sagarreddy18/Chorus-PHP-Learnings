<?php
class MyCustomException extends Exception {}
class FileNotFoundException extends Exception { }

// function doSomething($value) {
//     if($value < 0) {
//         throw new MyCustomException("Value must be positive.");
//     }
//     return true;
// }

// try {
//     doSomething(-1);
// } catch (MyCustomException $e) {
//     echo "Caught custom exception: " . $e->getMessage();
// } catch (Exception $e) {
//     echo "Caught general exception: " . $e->getMessage();
// }


try {
    if (!$file = fopen("somefile.txt", "r")) {
        throw new FileNotFoundException("File not found.");
    }
} catch (FileNotFoundException $e) {
    echo "Error: " . $e->getMessage();
}

?>