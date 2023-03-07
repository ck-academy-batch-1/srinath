<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
  
$_SESSION["Rollnumber"] = "11";
$_SESSION["Name"] = "John";
echo "Session variables are set.";
?>

</body>
</html>
