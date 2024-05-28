<?php
class MyCustomException extends Exception {}

function doSomething($value) {
    if($value < 0) {
        throw new MyCustomException("Value must be positive.");
    }
    return true;
}

try {
    doSomething(-1);
} catch (MyCustomException $e) {
    echo "Caught custom exception: " . $e->getMessage();
} catch (Exception $e) {
    echo "Caught general exception: " . $e->getMessage();
}
?>