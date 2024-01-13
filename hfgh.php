<?php
session_start();
?>
<!DOCTYPE html>
<html>
<body>

<?php
// Echo session variables that were set on previous page
echo "Favorite color is bana " . $_SESSION["fa2vcolodr"] . ".<br>";
echo "Favorite animal is " . $_SESSION["favanil"] . ".";
echo "Favorite animal is " . $_SESSION["favanimal"] . "7.8925";
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
