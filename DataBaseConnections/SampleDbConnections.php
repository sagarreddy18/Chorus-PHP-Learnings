<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_chorus";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name, email FROM employee_data";
$result = $conn->query($sql);
echo "Connected successfully";
print_r(mysqli_num_rows($result));  // to get the count of the records
while($row = $result->fetch_assoc()){
   echo $row['name'];
    echo "<br>";
}
// Close the connection
$conn->close();
?>
