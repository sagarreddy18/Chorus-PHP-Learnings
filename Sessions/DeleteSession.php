<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// This is to remove all session variables
session_unset();

// This is to destroy the session
session_destroy();
echo "Session Variables Cleared";
?>

</body>
</html>