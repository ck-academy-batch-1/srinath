<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
  
$_SESSION["Rollnumber"] = "34";
$_SESSION["Name"] = "Srinath";
echo "Session variables are set.";
?>

</body>
</html>
