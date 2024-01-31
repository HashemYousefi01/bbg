<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is bana " . $_SESSION["frww"] . ".<br>";
echo "Favorite animal is " . $_SESSION["fall"] . ".";
echo "Favorite animal is " . $_SESSION["favnimal"] . "7.8925";
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
