<?php
// Start the session
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Set session variables
echo "Session variables are set:<br>";
echo $_SESSION["favcolor"] . "<br>";
echo $_SESSION["favanimal"];

?>

</body>
</html>