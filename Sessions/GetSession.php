<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo isset($_SESSION["name"]) ? "First Name: " . $_SESSION["name"] . ".<br>" : "First Name: No data found! <br>";
echo isset($_SESSION["sureName"]) ? "Sure Name: " . $_SESSION["sureName"]  : "Sure Name: No data found!";

?>

</body>
</html>