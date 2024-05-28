<?php
class DivideByZeroException extends Exception {}
class NegativeValueException extends Exception {}

function divide($dividend, $divisor) {
    if($divisor == 0) {
        throw new DivideByZeroException("Division by zero.");
    }
    if($dividend < 0 || $divisor < 0) {
        throw new NegativeValueException("Negative values are not allowed.");
    }
    return $dividend / $divisor;
}

try {
    echo divide(10, 2);
} catch (DivideByZeroException $e) {
    echo "Caught divide by zero exception: " . $e->getMessage();
} catch (NegativeValueException $e) {
    echo "Caught negative value exception: " . $e->getMessage();
} catch (Exception $e) {
    echo "Caught general exception: " . $e->getMessage();
}
?>
