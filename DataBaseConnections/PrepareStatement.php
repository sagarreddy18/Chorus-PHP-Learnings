<!-- Prepared statements are used to execute the same (or similar) SQL statements repeatedly with
 high efficiency and to prevent SQL injection attacks. -->
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_chorus";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO employee_data (id,name, email) VALUES (?, ?, ?)");
$stmt->bind_param("sss", $id, $name, $email);

// Set parameters and execute
$id = "4";
$name = "Srinivas";
$email = "srinivas@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$conn->close();
?>
