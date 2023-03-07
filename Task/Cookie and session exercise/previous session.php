<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo 'The Name of the student is :' . $_SESSION["Name"] . '<br>'; 
echo 'The Roll number of the student is :' . $_SESSION["Rollnumber"] . '<br>';
?>

</body>
</html>