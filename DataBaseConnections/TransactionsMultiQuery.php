<!-- Transactions allow you to execute a series of SQL queries as a single unit of work, 
ensuring that all queries are executed successfully before committing the transaction. -->
<?php
$conn = new mysqli('localhost','root','','php_chorus');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$conn->begin_transaction();

try {
    $conn->query("INSERT INTO employee_data (id, name, email) VALUES ('6', 'Amisha', 'amisha@example.com')");
    $conn->query("INSERT INTO employee_data (id, name, email) VALUES ('7', 'Supraja', 'supraja@example.com')");
    
    $conn->commit();
    echo "Transaction successful";
} catch (Exception $e) {
    $conn->rollback();
    echo "Transaction failed: " . $e->getMessage();
}

$conn->close();
?>
