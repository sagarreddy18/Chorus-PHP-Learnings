<?php
try{
if (!$file = fopen("somefile.txt", "r")) {
   throw new Exception("File not found.");
}
}
catch (Exception $e){
    echo "Error :" . $e->getMessage();
}


// function divide($dividend, $divisor) {
//     if($divisor == 0) {
//         throw new Exception("Division by zero.");
//     }
//     return $dividend / $divisor;
// }

// try {
//     echo divide(0, 2); // Outputs 5
//     echo "<br>";
//     echo divide(1, 34); // Will throw an exception
// } catch (Exception $e) {
//     echo "Caught exception: " . $e->getMessage();
// } finally {
//     echo "This will always be executed.";
// }
?>