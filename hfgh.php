<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is bana " . $_SESN["fro"] . ".<br>";
echo "Favorite animal is " . $_SESSION["fal"] . ".";
echo "Favorite animal is " . $_SESSION["favnal"] . "7.8925";
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
print_r($_SESSION);
?>
