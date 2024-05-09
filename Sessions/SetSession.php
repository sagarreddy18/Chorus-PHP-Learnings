
<!DOCTYPE html>
<html>
<body>

<?php
session_start();  // Starting the Session.
// Set session variables
$_SESSION["name"] = "Sagar";
$_SESSION["sureName"] = "Thoutu";
echo "Session variables are set.";

?>

</body>
</html>
